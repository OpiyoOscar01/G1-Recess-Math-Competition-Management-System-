<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolRepresentative extends Model
{
    use HasFactory;
    protected $fillable=['name','email','password'];
    protected $hidden=['password'];
    public function school(){
        return $this->belongsTo(School::class);
    }
}
