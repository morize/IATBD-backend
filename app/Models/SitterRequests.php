<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pets;
use App\Models\Sitters;

class SitterRequests extends Model
{
    public $table = 'sitter_requests';
    
    public $timestamps = false;

    public function myPet(){
        return $this->hasOne(Pets::class,'id','pet_id');
    }

    public function mySitter(){
        return $this->hasOne(Sitters::class,'id','sitter_id');
    }
}
