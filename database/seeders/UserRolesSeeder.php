<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'role' => "user",
        ]);

        DB::table('user_roles')->insert([
            'role' => "admin",
        ]);
    }
}
