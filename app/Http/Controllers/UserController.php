<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::where("uuid", "=", $id)->first();
    }

    public function showUserPets($id)
    {   
        return User::where("uuid", "=", $id)->first()->myPets;
    }

    public function updateStatus(Request $request, $id)
    {   
        $userInstance = User::where("uuid", "=", $id)->first();
        $userInstance->status = $request->input('status'); 

        try{
            $userInstance->save();
        }
        catch(Exception $e){
            return $e;
        }
    }
}
