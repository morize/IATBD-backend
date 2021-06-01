<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetKindAndBreedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_kind_and_breed', function (Blueprint $table) {
            $table->string('kind');
            $table->string('breed');
            $table->unique(['kind', 'breed'], 'unq_ab_comb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_kind_and_breed');
    }
}
