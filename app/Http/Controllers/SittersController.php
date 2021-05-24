<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitters;

class SittersController extends Controller
{
    public function show($user_id){
        return Sitters::where("user_id", "=", $user_id)->first();
    }

    public function showPetPreferences($user_id){
        return Sitters::where("user_id", "=", $user_id)->first()->myPetPreferences->pluck('pet_kind');
    }
}
