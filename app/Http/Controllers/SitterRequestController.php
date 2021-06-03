<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SitterRequest;
use App\Models\Pet;

class SitterRequestController extends Controller
{
    public function index(){
        return SitterRequest::all();
    }

    public function show($sitterRequestId){
        return SitterRequest::where("id", "=", $sitterRequestId)->first();
    }
    
    public function store(Request $request, SitterRequest $sitterRequest){
        $sitterRequest->sitter_id = $request->input('sitter_id');
        $sitterRequest->pet_id = $request->input('pet_id');
        $sitterRequest->request_status = "pending";
        $sitterRequest->owner_name = $request->input('owner_name');
        $sitterRequest->pet_name = $request->input('pet_name');
        $sitterRequest->sitter_name = $request->input('sitter_name');

        if($request->input('sitter_remarks')){
            $sitterRequest->sitter_remarks = $request->input('sitter_remarks');
        }

        try{
            $sitterRequest->save();
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function update(Request $request, $sitterRequestId){
        $sitterRequest = SitterRequest::where("id", "=", $sitterRequestId)->first();
        $sitterRequest->request_status = $request['requestStatus'];
        
        if($request['requestStatus'] === "accepted"){
            $petInstance = Pet::where("id", "=", $sitterRequest->pet_id )->first();
            $petInstance->pet_status = "sitted";
            $petInstance->save();
        }

        $sitterRequest->save();
    }

    public function delete($sitterRequestId){
        $sitterRequest = SitterRequest::where("id", "=", $sitterRequestId)->first();
        
        try{
            $sitterRequest->delete();
        }
        catch(Exception $e){
            return $e;
        }
    }
}
