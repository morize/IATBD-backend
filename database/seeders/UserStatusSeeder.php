<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_status')->insert([
            'status' => "active",
        ]);

        DB::table('user_status')->insert([
            'status' => "blocked",
        ]);

        DB::table('user_status')->insert([
            'status' => "inactive",
        ]);
    }
}
