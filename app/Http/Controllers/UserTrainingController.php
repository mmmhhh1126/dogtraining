<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserTrainingController extends Controller
{
    //ユーザー側トレーニング一覧
    public function index(Request $request)
    {
        //ユーザーが選択した犬のIDを取得
        $dog_id = $request->input('dog_id');

        //犬のIDに紐づくトレーニングを取得
        $trainings = Training::where('dog_id', $dog_id)->get();

        //トレーニングの完了状況に応じて色を変える
        foreach ($trainings as $training) {
            $training->color = $training->completed ? 'green' : 'red';
        }

        //犬の一覧を取得してviewに渡す
        $dogs = auth()->user()->dogs;

        return view('usertraining', compact('trainings', 'dogs'));
    }
}

