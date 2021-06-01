<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitters;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SittersController extends Controller
{
    public function show($userId){
        return Sitters::where("user_id", "=", $userId)->first();
    }

    public function showSitterRequests($userId){
        return Sitters::where("user_id", "=", $userId)->first()->mySitterRequests;
    }

    public function store(Request $request, Sitters $sitter){
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
        $sitterInstance = Sitters::where("user_id", "=", $userId)->first();
        $sitterInstance->sitter_status = $request->input('sitter_status'); 

        try{
            $sitterInstance->save();
        }
        catch(Exception $e){
            return $e;
        }
    }
}
