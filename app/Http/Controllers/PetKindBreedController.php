<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetKindBreed;

class PetKindBreedController extends Controller
{
    public function getPetKinds()
    {
        return PetKindBreed::all()->unique('kind')->pluck('kind');
    }

    public function getPetBreedsFromKind($kind)
    {
        return PetKindBreed::where("kind","=",$kind)->pluck('breed');
    }
}
