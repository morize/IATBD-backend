<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DogBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dog_breed_array = ["Boxer","Labrador","Pug","Corgi","Poodle","German Shepherd"];
        
        foreach ($dog_breed_array as $breed) {
            DB::table('pet_kind_and_breed')->insert([
                'kind' => "Dog",
                'breed' => $breed,
            ]);
        }
    }
}
