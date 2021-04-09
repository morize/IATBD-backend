<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserData(Request $request)
    {
        return $request->user();
    }
}
