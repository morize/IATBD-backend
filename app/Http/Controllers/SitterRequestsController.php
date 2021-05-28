<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\SitterRequests;

class SitterRequestsController extends Controller
{
    public function show($sitterRequestId){
        return SitterRequests::where("id", "=", $sitterRequestId)->first();
    }
    
    public function store(Request $request, SitterRequests $sitterRequest){
        $sitterRequest->sitter_id = $request->input('sitter_id');
        $sitterRequest->pet_id = $request->input('pet_id');
        $sitterRequest->request_status = "pending";

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
        $sitterRequest = SitterRequests::where("id", "=", $sitterRequestId)->first();
        $sitterRequest->request_status = $request->input('request_status');
        $sitterRequest->save();
    }
}
