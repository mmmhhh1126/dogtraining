<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_dog;
use App\Models\Dog;
use App\Models\Training;
use Illuminate\Support\Facades\Log;

class Training_DogController extends Controller
{
    // メソッドの実装
    public function completeTraining(Request $request)
    {
        $training_dog_id = $request->input('id');

        $training_dog = Training_dog::find('id');

        if (!$training_dog) {
            // 存在しないトレーニング犬のIDが渡された場合は、エラーを返す
            return response()->json(['error' => 'Training dog not found'], 404);
        }

        // トレーニングを完了させる
        $training_dog->pivot->completed = true;
        $training_dog->pivot->save();

        return redirect('/usertraining')->with('success', 'Training completed successfully');
    }

    public function training($id)
    {
        $dog = Dog::findOrFail($id);
        // $trainings = $dog->trainings_dog->trainings;
        $trainings = Training::all();
        return view('usertraining', compact('dog', 'trainings'));
    }
}
