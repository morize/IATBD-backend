<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        return User::where("uuid", "=", $id)->first();
    }

    public function showUserPets($id)
    {   
        return User::where("uuid", "=", $id)->first()->myPets;
    }
}
