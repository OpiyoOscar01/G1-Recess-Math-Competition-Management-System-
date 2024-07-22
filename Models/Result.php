<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['score'];

    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }
    public function acceptedParticipant(){
        return $this->belongsTo(AcceptedParticipant::class);
    }
}
