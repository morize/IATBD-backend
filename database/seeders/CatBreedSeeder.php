<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat_breed_array = ["Bengal","Burmese","British Shorthair","Siberian","Siamese","Tonkinese"];
        foreach ($cat_breed_array as $breed) {
            DB::table('animal_and_breed')->insert([
                'animal' => "Cat",
                'breed' => $breed,
            ]);
        }
    }
}
