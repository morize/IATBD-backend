<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SitterReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sitter_reviews')->insert([
            'sitter_id' => 1,
            'reviewer_id' => 1,
            'rating' => 2,
            'review' => "hey man not cool",
        ]);

        DB::table('sitter_reviews')->insert([
            'sitter_id' => 1,
            'reviewer_id' => 2,
            'rating' => 4,
            'review' => "this was way cooler this was way cooler this was way cooler this was way cooler",
        ]);
    }
}
