<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','district','reg_num'
    ] ;
    public function administrator(){
        return $this->hasOne(Administrator::class);
    }
      public function schoolRepresentative(){
        return $this->hasOne(SchoolRepresentative::class);
      }

      public function acceptedParicipants(){
        return $this->hasMany(AcceptedParticipant::class);
      }
      public function rejectedParicipants(){
        return $this->hasMany(RejectedParticipant::class);
      }
}
