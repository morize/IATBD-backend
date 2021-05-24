<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitters;
use Illuminate\Support\Facades\Log;

class SittersController extends Controller
{
    public function show($user_id){
        return Sitters::where("user_id", "=", $user_id)->first();
    }

    public function update(Request $request, $userId){
        $sitterInstance = Sitters::where("user_id", "=", $userId)->first();
        $sitterInstance->sit_status = $request->input('sitter_status'); 

        try{
            $sitterInstance->save();
            return "success";
        }
        catch(Exception $e){
            return $e;
        }
    }
}
