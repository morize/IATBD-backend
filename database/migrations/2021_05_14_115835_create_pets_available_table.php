<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsAvailableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_available', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pet_id");
            $table->string("sit_date_start");
            $table->string("sit_date_end");
            $table->double("hourly_pay");
            $table->foreign("pet_id")->references("id")->on("pets");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets_available');
    }
}
