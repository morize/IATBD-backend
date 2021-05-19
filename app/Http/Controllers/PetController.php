<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Pets;

class PetController extends Controller
{
    public function index()
    {
        return Pets::where("pet_status", "=", "available")->get();
    }

    public function show($id)
    {
        return Pets::where("id", "=", $id)->first();
    }

    public function showImage($id)
    {
        $pathToFile = Pets::select('pet_image')->where("id", "=", $id)->pluck('pet_image')->first();
        
        return response()->file($pathToFile);
    }

    public function store(Request $request, Pets $pets)
    {
        $pets->owner_id = Auth::id();
        $pets->pet_name = $request->input('pet_name');
        $pets->pet_kind = $request->input('pet_kind');
        $pets->pet_breed = $request->input('pet_breed');
        $pets->pet_status = "available";
        $pets->sit_hourly_prize = floatval($request->input('sit_hourly_pay'));
        $pets->sit_date_start = $request->input('sit_start_date');
        $pets->sit_date_end = $request->input('sit_end_date');

        if($request->input('sit_remarks')){
            $pets->sit_remarks = $request->input('sit_remarks');
        }

        $imageFile = $request->file('pet_image');
        $imageFileName = $imageFile->getClientOriginalName();
        
        $request->file('pet_image')->storeAs('pet_images/', $imageFileName, 'public');

        $pets->pet_image = "storage/pet_images/{$imageFileName}";

        try{
            $pets->save();
            return "success";
        }
        catch(Exception $e){
            return $e;
        }
    }
}
