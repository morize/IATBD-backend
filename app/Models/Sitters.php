<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SitterPetChoices;

class Sitters extends Model
{
    public $table = 'sitters';

    public function myPetPreferences(){
        return $this->hasMany(SitterPetChoices::class,'sitter_id','id');
    }
}
