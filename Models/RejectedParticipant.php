<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectedParticipant extends Model
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
}
