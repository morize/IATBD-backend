<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitters;
use App\Models\SitterPetChoices;
use Illuminate\Support\Facades\Log;

class SitterPetChoicesController extends Controller
{

    public function show($userId){
        return Sitters::where("user_id", "=", $userId)->first()->myPetPreferences->pluck('pet_kind');
    }

    public function update(Request $request, $userId){
        $currentPreferences = json_decode(Sitters::where("user_id", "=", $userId)->first()->myPetPreferences->pluck('pet_kind'));
        $sitterId = Sitters::where("user_id", "=", $userId)->pluck('id')->first();
        $requestPreferences= json_decode($request->all()['sitter_preferences']);
        
        foreach($requestPreferences as $requestPreference){
            if(in_array($requestPreference->kind, $currentPreferences)){
                if(!$requestPreference->checked){
                     //unchecked and in database = delete
                     SitterPetChoices::where("sitter_id", "=", $sitterId)->where("pet_kind", "=", $requestPreference->kind)->first()->delete();
                }
            }

            if(!in_array($requestPreference->kind, $currentPreferences)){
                if($requestPreference->checked){
                    //checked and not in database = create
                    $newPetPreference = new SitterPetChoices;
                    $newPetPreference->sitter_id= $sitterId;
                    $newPetPreference->pet_kind= $requestPreference->kind;
                    
                    try{
                        $newPetPreference->save();
                    }catch(Exception $e){
                        return $e;
                    }
                }
            }
        }
    }
        


        
        // $sitterInstance = Sitters::where("user_id", "=", $userId)->first();
        // $sitterInstance->sit_status = $request->input('sitter_status'); 

        // try{
        //     $sitterInstance->save();
        //     return "success";
        // }
        // catch(Exception $e){
        //     return $e;
        // }
    
}
