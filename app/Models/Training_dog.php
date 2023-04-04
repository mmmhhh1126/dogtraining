<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_dog extends Model
{
    use HasFactory;
    protected $table = 'training_dog';

    protected $fillable = [
        'training_id',
        'dog_id',
        'completed',
    ];
    public function training()
    {
        return $this->hasOne(Training::class);
    }

    public function dog()
    {
        return $this->belongsTo(Dog::class);
    }
}
