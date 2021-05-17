<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pets extends Model
{
    public $table = 'pets';

    public function myOwner(){
        return $this->belongsTo(User::class,'owner_id','uuid');
    }
}
