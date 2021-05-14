<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pets;

class PetController extends Controller
{
    public function getAvailablePets()
    {
        return Pets::where("available", "=", "1")->get();
    }

    public function getAvailablePetsFromKind($kind)
    {
        return Pets::where("available", "=", "1")->where("pet_kind", "=", $kind)->get();
    }

    public function getSpecificPet($id)
    {
        return Pets::where("id", "=", $id)->first();
    }
}
