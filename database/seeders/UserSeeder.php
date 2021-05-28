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
            'name' => "Mauriccio",
            'email' => "ayyylmao985@gmail.com",
            'password' => bcrypt("Hilol123."),
        ]);

        DB::table('users')->insert([
            'name' => "mauri985",
            'email' => "mauricemr@outlook.com",
            'password' => bcrypt("Hilol123."),
        ]);
    }
}
