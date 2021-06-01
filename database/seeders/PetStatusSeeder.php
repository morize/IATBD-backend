<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_status')->insert([
            'status' => "available",
        ]);

        DB::table('pet_status')->insert([
            'status' => "sitted",
        ]);
    }
}
