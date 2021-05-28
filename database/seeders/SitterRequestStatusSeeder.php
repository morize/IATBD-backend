<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SitterRequestStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sitter_requests_status')->insert([
            'status' => 'pending',
        ]);

        DB::table('sitter_requests_status')->insert([
            'status' => 'accepted',
        ]);
        
        DB::table('sitter_requests_status')->insert([
            'status' => 'rejected',
        ]);
    }
}
