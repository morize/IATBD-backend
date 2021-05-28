<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SitterRequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sitter_requests')->insert([
            'sitter_id' => 1,
            'pet_id' => 1,
            'sitter_remarks' => "Dit is een opmerking",
            'request_status' => 'pending'
        ]);
        
        DB::table('sitter_requests')->insert([
            'sitter_id' => 1,
            'pet_id' => 2,
            'sitter_remarks' => "Dit wwww een opmerking",
            'request_status' => 'pending'
        ]);
    }
}
