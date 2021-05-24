<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitters;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SittersController extends Controller
{
    public function show($user_id){
        return Sitters::where("user_id", "=", $user_id)->first();
    }

    public function store(Request $request, Sitters $sitters){
        $sitters->user_id = Auth::id();
        $sitters->sit_status = $request->input('sitter_status');

        try{
            $sitters->save();
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function update(Request $request, $userId){
        $sitterInstance = Sitters::where("user_id", "=", $userId)->first();
        $sitterInstance->sit_status = $request->input('sitter_status'); 

        try{
            $sitterInstance->save();
        }
        catch(Exception $e){
            return $e;
        }
    }
}
