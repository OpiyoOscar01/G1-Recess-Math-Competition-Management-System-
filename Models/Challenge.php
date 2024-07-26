<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = ['duration',
        'start_time',
        'end_time',
        'num_of_questions'];

    public function attempts()
    {
     return $this->hasMany(Attempt::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function result(){
             return $this->hasOne(Result::class);
    }
}
