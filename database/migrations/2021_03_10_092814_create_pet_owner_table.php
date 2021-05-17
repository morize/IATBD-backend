<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_pets', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->unsignedBigInteger('owner_id');
            $table->string('name');
            $table->string('animal');
            $table->string('breed');
            $table->string('sitter_date_start');
            $table->string('sitter_date_end');
            $table->integer('hourly_fee');
            $table->string('remarks');
            $table->foreign('animal')->references('animal')->on('animal_and_breed');
            $table->foreign('breed')->references('breed')->on('animal_and_breed');
            $table->foreign('owner_id')->references('uuid')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_owner');
    }
}
