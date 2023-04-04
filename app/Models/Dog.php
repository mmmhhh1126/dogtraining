<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Training_dog;



class Dog extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'brthday','description', 'image'];
    public function trainings_dog()
    {
        return $this->hasOne(Training_dog::class);
    }
}
