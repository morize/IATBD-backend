<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SitterRequests;

class Pets extends Model
{
    public $table = 'pets';

    public $timestamps = false;
    
    public function myOwner(){
        return $this->belongsTo(User::class,'owner_id','uuid');
    }

    public function myRequests(){
        return $this->hasMany(SitterRequests::class,'pet_id','id');
    }
}
