<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HamsterBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hamster_breed_array = ["Syrian","Dwarf Campbell","Dwarf White Russian","Roborovski","Chinese","Golden"];
        
        foreach ($hamster_breed_array as $breed) {
            DB::table('pet_kind_and_breed')->insert([
                'kind' => "Hamster",
                'breed' => $breed,
            ]);
        }
    }
}
