<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TestErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_and_breed')->insert([
            'animal' => "Cat",
            'breed' => "Tonkinese",
        ]);
    }
}
