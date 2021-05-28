<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SittersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sitters')->insert([
            'user_id' => 1,
            'sit_rating' => 4,
            'sit_status' => "active"
        ]);
    }
}
