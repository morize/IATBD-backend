<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'owner_id' => 1,
            'pet_name' => "Carlos",
            'pet_kind' => "Hond",
            'pet_breed' => "Boxer",
            'available' => false,
        ]);

        DB::table('pets')->insert([
            'owner_id' => 1,
            'pet_name' => "Pepe",
            'pet_kind' => "Hond",
            'pet_breed' => "Corgi",
            'available' => true,
        ]);
        
        DB::table('pets')->insert([
            'owner_id' => 1,
            'pet_name' => "Mong",
            'pet_kind' => "Hamster",
            'pet_breed' => "Dwarf White Russian",
            'available' => true,
        ]);

        DB::table('pets')->insert([
            'owner_id' => 1,
            'pet_name' => "Dude",
            'pet_kind' => "Kat",
            'pet_breed' => "Bengal",
            'available' => true,
        ]);

        DB::table('pets')->insert([
            'owner_id' => 1,
            'pet_name' => "Lorenzo",
            'pet_kind' => "Parkiet",
            'pet_breed' => "Monniksparkiet",
            'available' => true,
        ]);
    }
}
