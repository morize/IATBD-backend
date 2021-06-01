<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Sitter;

class SitterController extends Controller
{
    public function show($userId){
        return Sitter::where("user_id", "=", $userId)->first();
    }

    public function showSitterRequests($userId){
        return Sitter::where("user_id", "=", $userId)->first()->mySitterRequests;
    }

    public function store(Request $request, Sitter $sitter){
        $sitter->user_id = Auth::id();
        $sitter->sitter_status = $request->input('sitter_status');

        try{
            $sitter->save();
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function update(Request $request, $userId){
        $sitterInstance = Sitter::where("user_id", "=", $userId)->first();
        $sitterInstance->sitter_status = $request->input('sitter_status'); 

        try{
            $sitterInstance->save();
        }
        catch(Exception $e){
            return $e;
        }
    }
}
