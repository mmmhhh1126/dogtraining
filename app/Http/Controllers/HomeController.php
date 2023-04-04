<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;


class HomeController extends Controller
{
    public function index()
    {
        $currentDogId = session('current_dog_id');
        $dog = Dog::find($currentDogId);
        $trainings = $dog->trainings()->get();
        return view('home', ['trainings' => $trainings]);
    }
}
