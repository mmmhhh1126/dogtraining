<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'trickname',
        'teach',
        'why',
        'image',
    ];

    protected $attributes = [
        'required_time' => 0,
    ];

    public function training_dog()
    {
        return $this->hasOne(Training_dog::class);
    }
}