<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        return Pet::where("pet_status", "=", "available")->where("owner_id", "!=", Auth::id())->get();
    }

    public function show($id)
    {
        return Pet::where("id", "=", $id)->first();
    }

    public function showImage($id)
    {
        $pathToFile = Pet::select('pet_image')->where("id", "=", $id)->pluck('pet_image')->first();
        
        return response()->file($pathToFile);
    }

    public function showPetRequests($id)
    {
        return Pet::where("id", "=", $id)->first()->myRequests;
    }

    public function store(Request $request, Pet $pet)
    {
        $pet->owner_id = Auth::id();
        $pet->pet_name = $request->input('pet_name');
        $pet->pet_kind = $request->input('pet_kind');
        $pet->pet_breed = $request->input('pet_breed');
        $pet->pet_status = "available";
        $pet->sit_hourly_prize = floatval($request->input('sit_hourly_pay'));
        $pet->sit_date_start = $request->input('sit_start_date');
        $pet->sit_date_end = $request->input('sit_end_date');

        if($request->input('sit_remarks')){
            $pet->sit_remarks = $request->input('sit_remarks');
        }

        $imageFile = $request->file('pet_image');
        $imageFileName = $imageFile->getClientOriginalName();
        
        $request->file('pet_image')->storeAs('pet_images/', $imageFileName, 'public');

        $pet->pet_image = "storage/pet_images/{$imageFileName}";

        try{
            $pet->save();
            //Wonder what the best type of success return is.
            return "success";
        }
        catch(Exception $e){
            return $e;
        }
    }
}
