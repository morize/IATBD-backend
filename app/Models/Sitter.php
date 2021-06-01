<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SitterPetChoices;
use App\Models\SitterRequest;
use App\Models\User;

class Sitter extends Model
{
    public $table = 'sitters';

    public $timestamps = false;
    
    public function myPetPreferences(){
        return $this->hasMany(SitterPetChoices::class,'sitter_id','id');
    }

    public function myUser(){
        return $this->belongsTo(User::class,'user_id','uuid');
    }

    public function mySitterRequests(){
        return $this->hasMany(SitterRequest::class,'sitter_id','id');
    }
}
