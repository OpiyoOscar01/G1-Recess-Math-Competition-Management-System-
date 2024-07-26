<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attempt extends Model
{
    use HasFactory;
    protected $table = ['num_of_attempts'];
    public function challenge(){
        return $this->belongsTo(Challenge::class);
    }
}
