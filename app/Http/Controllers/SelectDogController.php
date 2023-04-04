<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;


    class SelectDogController extends Controller
{
    public function setDog(Request $request)
    {
        $dogId = $request->input('dog_id');
        session(['current_dog_id' => $dogId]);
        return redirect()->route('home');
    }
}
