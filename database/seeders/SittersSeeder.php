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
            'sitter_status' => "active"
        ]);

        DB::table('sitters')->insert([
            'user_id' => 2,
            'sitter_status' => "active"
        ]);
    }
}
