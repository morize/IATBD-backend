<?php

namespace App\Http\Controllers;

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

    public function create(Request $request)
    {
        
    }
}
