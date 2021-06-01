<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pet;
use App\Models\Sitter;

class SitterRequest extends Model
{
    public $table = 'sitter_requests';
    
    public $timestamps = false;

    public function myPet(){
        return $this->hasOne(Pet::class,'id','pet_id');
    }

    public function mySitter(){
        return $this->hasOne(Sitter::class,'id','sitter_id');
    }
}
