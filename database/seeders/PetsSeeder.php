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
            'sit_hourly_prize' => 2.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "Hallo yes help",
        ]);

        DB::table('pets')->insert([
            'owner_id' => 2,
            'pet_name' => "Pepe",
            'pet_kind' => "Hond",
            'pet_breed' => "Corgi",
            'sit_hourly_prize' => 2.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "Hallo yes help",
        ]);
        
        DB::table('pets')->insert([
            'owner_id' => 2,
            'pet_name' => "Mong",
            'pet_kind' => "Hamster",
            'pet_breed' => "Dwarf White Russian",
            'sit_hourly_prize' => 7.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "rtnjtnrssadf",
        ]);

        DB::table('pets')->insert([
            'owner_id' => 1,
            'pet_name' => "Dude",
            'pet_kind' => "Kat",
            'pet_breed' => "Bengal",
            'sit_hourly_prize' => 12.99,
            'sit_date_start' => "3/2/2019",
            'sit_date_end' => "7/2/2019",
            'sit_remarks' => "qweqweqweqwesxdsa",
        ]);

        DB::table('pets')->insert([
            'owner_id' => 2,
            'pet_name' => "Lorenzo",
            'pet_kind' => "Parkiet",
            'pet_breed' => "Monniksparkiet",
            'sit_hourly_prize' => 10.99,
            'sit_date_start' => "8/2/2019",
            'sit_date_end' => "24/2/2019",
            'sit_remarks' => "Hallo yqweqweqwes help",
        ]);
    }
}
