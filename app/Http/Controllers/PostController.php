<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $user_id = auth()->id(); // ログインしているユーザーのIDを取得
        $posts = Post::where('user_id', $user_id)->latest()->paginate(10); // ログインしているユーザーが投稿したデータのみ取得
        return view('posts.index', compact('posts'));
    }

    public function user()
    {
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        // 保存用データ配列
        $data = $request->validated();
        // ログインユーザーのIDを追加
        // $data['user_id'] = auth()->id();

        $user_id = auth()->id(); // ログインしているユーザーのIDを取得

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $user_id, // ログインユーザーのIDを追加
        ];

        // 画像取得
        $image_path = '';
        if ($request->hasFile('image')) {
            $image_path    = $request->file('image')->store('image', 'public');
            $data['image'] = $image_path;
        }

        // 保存
        Post::create($data);

        return redirect()->route('posts.index')->with('message', '作成が完了しました。');
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        //
        $image_path = '';           // 選択された画像
        $image_cur  = $post->image; // 現在の画像ファイルパス

        // 保存用データ配列
        $data = [
            'title'       => $request->title,
            'description' => $request->description,
        ];

        // 
        if ($request->hasFile('image')) {
            // 現在の画像ファイル削除
            if ($image_cur !== '' && !is_null($image_cur)) {
                Storage::disk('public')->delete($image_cur);
            }
            // 選択画像ファイルを保存してパスをセット
            $image_path    = $request->file('image')->store('image', 'public');
            $data['image'] = $image_path;
        }

        // 更新
        $post->update($data);

        return redirect()->route('posts.index')->with('message', '投稿の更新が完了しました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // 画像ファイルパスを取得
        $image_cur = $post->image;

        // 登録されていれば削除
        if ($image_cur !== '' && !is_null($image_cur)) {
            Storage::disk('public')->delete($image_cur);
        }

        // 削除
        $post->delete();

        return redirect()->route('posts.index')->with('message', '投稿の削除が完了しました。');
    }

}
