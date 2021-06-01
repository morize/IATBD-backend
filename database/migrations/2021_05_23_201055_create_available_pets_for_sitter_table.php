<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailablePetsForSitterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_pets_for_sitter', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sitter_id');
            $table->string('pet_kind');

            $table->foreign('sitter_id')->references('id')->on('sitters');
            $table->foreign('pet_kind')->references('kind')->on('pet_kind_and_breed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_pets_for_sitter');
    }
}
