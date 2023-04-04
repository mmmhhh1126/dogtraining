<?php

namespace App\Http\Controllers;
use App\Models\Training;
use App\Models\Dog;
use App\Models\CompletedTraining;
use Illuminate\Http\Request;

class CompletedTrainingController extends Controller
{
    //
    public function index()
{
    $dogs = Dog::with('completedTrainings')->get();
    $trainings = Training::all();
    return view('dogs.index', compact('dogs', 'trainings'));
}
}
