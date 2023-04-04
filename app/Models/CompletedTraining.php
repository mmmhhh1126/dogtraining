<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'dog_id',
        'training_id',
    ];

    public function dog()
    {
        return $this->belongsTo(Dog::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
