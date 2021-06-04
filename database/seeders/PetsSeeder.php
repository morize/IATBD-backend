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
            'pet_name' => "Baco",
            'pet_kind' => "Hond",
            'pet_breed' => "Boxer",
            'sit_hourly_prize' => 10.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "This dog can be quite unpredictable with cats...",
        ]);

        DB::table('pets')->insert([
            'owner_id' => 1,
            'pet_name' => "Flavio",
            'pet_kind' => "Hond",
            'pet_breed' => "Corgi",
            'sit_hourly_prize' => 4.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "Cries alot at night.",
        ]);
        
    }
}
