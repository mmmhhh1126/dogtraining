<?php

namespace App\Http\Controllers;
use App\Models\Training;
use App\Models\Dog;
use App\Models\Completed_training;
use Illuminate\Http\Request;

class CompletedTrainingController extends Controller
{
    //
    public function show()
{
    $dogs = Dog::with('completedTrainings')->get();
    $trainings = Training::all();
    return view('dogs.index', compact('dogs', 'trainings'));
}
public function index($id)
{
    $trainings = Training::all();
    $completedTraining = Completed_training::with('training')->findOrFail($id);
    return view('trainings.index', compact('completed_training'));
}
}
