<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitterPetChoices extends Model
{
    public $table = 'available_pets_for_sitter';
    
    public $timestamps = false;
}
