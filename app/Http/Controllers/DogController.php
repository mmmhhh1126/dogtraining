<?php

namespace App\Http\Controllers;

use App\Models\Dog;

use Illuminate\Http\Request;
use App\Http\Requests\DogRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DogController extends Controller
{

    public function index()
    {
        $dogs = Dog::latest()->paginate(10);
        return view('dashboard', compact('dogs'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DogRequest $request)
    {
        // 保存用データ配列
        $data = $request->validated();

        // 画像取得
        $image_path = '';
        if ($request->hasFile('image')) {
            $image_path    = $request->file('image')->store('image', 'public');
            $data['image'] = $image_path;
        }

        // 保存
        Dog::create($data);

        return redirect()->route('dashboard')->with('message', '投稿の作成が完了しました。');
    }
    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        return view('dashboard', compact('dog'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
        return view('dogs.edit', compact('dog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DogRequest $request, Dog $dog)
    {
        //
        $image_path = '';           // 選択された画像
        $image_cur  = $dog->image; // 現在の画像ファイルパス
    
        // 保存用データ配列
        $data = [
            'name'       => $request->name,
            'brthday'       => $request->brthday,
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
        $dog->update($data);
    
        return redirect()->route('dogs.index')->with('message', '投稿の更新が完了しました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        // 画像ファイルパスを取得
        $image_cur = $dog->image;
    
        // 登録されていれば削除
        if ($image_cur !== '' && !is_null($image_cur)) {
            Storage::disk('public')->delete($image_cur);
        }
    
        // 削除
        $dog->delete();
    
        return redirect()->route('dogs.index')->with('message', '投稿の削除が完了しました。');
    }


    // public function index()
    // {
    //     //ログインしているかどうかを確認する
    //     if (Auth::check()) {
    //         //ログインユーザーのDOGモデル一覧を取得する
    //         $dogs = Dog::where('user_id', Auth::user()->id)->get();
    //         //Dogモデルを持っていない場合は、空のコレクションを代入する
    //         if ($dogs->isEmpty()) {
    //             $dogs = collect();
    //         }
    //         //初期状態では選択されている犬がいない為、$selected_dogをfalseにする
    //         $selected_dog = false;
    //         //viewにデータを渡す
    //         return view('dashboard', compact('selected_dog', 'dogs'));
    //     }
    //     //ログインしていない場合は、ログイン画面にリダイレクトする
    //     return redirect()->route('login');
    // }

    // // public function dashboard()
    // // {
    // //     $currentDogId = session('current_dog_id');
    // //     $currentDog = Dog::find($currentDogId);

    // //     return view('dashboard', compact('currentDog'));
    // // }


    // public function submit(Request $request)
    // {
    //     //新しいDOGモデルを作成する
    //     $dogs = new Dog;

    //     //DOGモデルの各カラムを設定する
    //     $dogs->user_id = auth()->user()->id;
    //     $dogs->name = $request->input('name');
    //     $dogs->description = $request->input('description');
    //     $dogs->brthday = $request->input('brthday');
        

    //     //DBに保存する
    //     $dogs->save();

    //     //作成完了ページに飛ぶ
    //     return redirect('/dogcreateok');
    // }
    


    // public function destroy($id)
    // {
    //     try {
    //         //IDに対応するDOGモデルを取得する
    //         $dogs = Dog::findOrFail($id);
    //         //モデルを削除する
    //         $dogs->delete();

    //         return redirect()->route('dog.additon')->with('success', '削除しました。');
    //     } catch (ModelNotFoundException $e) {
    //         return redirect()->route('dog.additon')->with('error', '削除するデータが見つかりませんでした。');
    //     }
        
    // }

    // public function show($user_id, $dog_id)
    // {
    //     $user = User::findOrFail($user_id);
    //     $dog = $user->dogs()->findOrFail($dog_id);
    //     $trainings = $dog->trainings;

    //     return view('dogs.show', compact('user', 'dog', 'trainings'));
    // }

    // public function showDogTrainings($id, $dog_id)
    // {
    //     //ユーザーがIDに対するUserモデルを取得する
    //     $user = User::find($id);
    //     //ユーザーが所有する犬
    //     $dog = $user->dogs()->where('id', $dog_id)->first();
    //     $trainings = $dog->trainings;

    //     return view('dashboard', compact('user', 'dog', 'trainings'));
    // }

    // public function switch(Request $request)
    // {
    //     $dog_id = $request->dog_id;
    //     $dog = Dog::find($dog_id);
    //     $trainings = $dog->trainings;
    //     return view('user.training.index', ['dog' => $dog, 'trainings' => $trainings]);
    // }

    // public function training($id)
    // {
    //     $currentDog = Dog::findOrFail($id);
    //     $trainings = $currentDog->trainings;
    //     return view('usertraining', compact('currentDog', 'trainings'));
    // }
}
