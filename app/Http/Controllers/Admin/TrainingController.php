<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Completed_training;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TrainingController extends Controller
{
    //一覧表示
    // public function index()
    // {
    //     $trainings = Training::All();
    //     return view("admin.training", compact('trainings'));
    // }
    // public function user()
    // {
    //     $trainings = Training::all();
    //     return view('usertraining', compact('trainings'));
    // }
    //ユーザー側でタイトル表示
    // public function show($id)
    // {
    //     $trainings = Training::find($id);

    //     if (!$trainings) {
    //         return redirect()->route('show');
    //     }

    //     return view('training', compact('trainings'));
    // }

    public function index()
    {
        $trainings = Training::all();
        return view("admin.training", compact('trainings'));
    }


    public function user()
    {
        $trainings = Training::all();
        return view('trainings.index', compact('trainings'));
    }

    // public function user(Request $request)
    // {
    //     // 渡されたpost_idパラメータを取得
    //     $post_id = $request->input('post_id');

    //     // post_idに紐づくトレーニング一覧を取得
    //     $trainings = Training::where('post_id', $post_id)->get();

    //     // 完了したトレーニングにはcompletedクラスを付ける
    //     $completed_trainings = Completed_training::where('post_id', $post_id)->pluck('training_id');
    //     return view('trainings.index', [
    //         'trainings' => $trainings,
    //         'completed_trainings' => $completed_trainings,
    //     ]);
    // }

    public function show(Request $request, $training_id)
    {
        $training = Training::where('id', '=', $training_id)->first();
        return view('trainings.show', compact('trainings'));
    }

    //新規作成
    public function submit(Request $request)
    {
        $trainings = new Training;
        $trainings->trickname = $request->input('trickname');
        $trainings->teach = $request->input('teach');
        $trainings->why = $request->input('why');
        $trainings->pic = $request->input('pic');
        $trainings->required_time = 0;
        $trainings->save();

        return redirect('/createok');
    }
    //削除
    public function destroy($id)
    {
        try {
            $training = Training::findOrFail($id);
            $training->delete();
            return redirect()->route('admin.training')->with('success', '削除しました。');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.training')->with('error', '削除するトリックが見つかりませんでした。');
        }
    }

    //編集
    public function edit($id)
    {
        $training = Training::find($id);

        return view('admin.trainingedit', compact('training'));
    }
    public function update(Request $request, $id)
    {
        $training = Training::find($id);
        $training->trickname = $request->input('trickname');
        $training->teach = $request->input('teach');
        $training->why = $request->input('why');
        $training->pic = $request->input('pic');
        $training->save();

        return redirect()->route('admin.training');
    }


    //犬のトレーニングページ
    public function showTrainings($user_id, $post_id)
    {
        $post_id = auth()->id();
    }
}
