<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "ayyylmao985@gmail.com",
            'password' => bcrypt("Password123."),
            'role' => "admin"
        ]);

        DB::table('users')->insert([
            'name' => "user1",
            'email' => "mauricemr@outlook.com",
            'password' => bcrypt("Password123."),
        ]);
    }
}
