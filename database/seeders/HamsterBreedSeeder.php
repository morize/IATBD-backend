<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            DB::table('animal_and_breed')->insert([
                'animal' => "Hamster",
                'breed' => $breed,
            ]);
        }
    }
}
