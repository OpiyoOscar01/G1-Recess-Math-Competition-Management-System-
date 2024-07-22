<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedParticipant extends Model
{
    use HasFactory;
    protected $fillable=[
        'username','firstname','lastname','email','password'
    ] ;
    protected $hidden=['password'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function result(){
        return $this->hasOne(Result::class);
    }
}
