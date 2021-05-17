<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => "user",
        ]);

        DB::table('roles')->insert([
            'role' => "sitter",
        ]);

        DB::table('roles')->insert([
            'role' => "admin",
        ]);
    }
}
