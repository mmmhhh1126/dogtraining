<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Completed_training extends Model
{
    use HasFactory;
    protected $fillable = ['trickname','training_id', 'why', 'teach'];

    // public function dog()
    // {
    //     return $this->belongsTo(Dog::class);
    // }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
