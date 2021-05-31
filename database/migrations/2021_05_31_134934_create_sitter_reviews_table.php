<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitterReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitter_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sitter_id');
            $table->unsignedBigInteger('reviewer_id')->unique();
            $table->unique(['reviewer_id', 'sitter_id'], 'unq_ab_comb');
            $table->integer('rating');
            $table->string('review', 150);

            $table->foreign('reviewer_id')->references('uuid')->on('users');
            $table->foreign('sitter_id')->references('id')->on('sitters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sitter_reviews');
    }
}
