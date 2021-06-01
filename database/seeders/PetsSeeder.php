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
            'sit_remarks' => "This dog can be quite mischievous when it comes to cats...",
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
        
        DB::table('pets')->insert([
            'owner_id' => 2,
            'pet_name' => "Cuy",
            'pet_kind' => "Hamster",
            'pet_breed' => "Dwarf White Russian",
            'sit_hourly_prize' => 7.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "Please dont eat the thing.",
        ]);

        DB::table('pets')->insert([
            'owner_id' => 2,
            'pet_name' => "Candy",
            'pet_kind' => "Kat",
            'pet_breed' => "Bengal",
            'sit_hourly_prize' => 12.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "This cat is very active. Be aware of giving her too much space.",
        ]);

        DB::table('pets')->insert([
            'owner_id' => 2,
            'pet_name' => "Lorenzo",
            'pet_kind' => "Parkiet",
            'pet_breed' => "Monniksparkiet",
            'sit_hourly_prize' => 10.99,
            'sit_date_start' => "8/2/2019",
            'sit_date_end' => "24/2/2019",
            'sit_remarks' => "Please come back :(",
        ]);
    }
}
