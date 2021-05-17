<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("owner_id");
            $table->string("pet_name");
            $table->string("pet_kind");
            $table->string("pet_breed");
            $table->string('pet_image')->default("/img/pet_default.jpg");
            $table->boolean("available");
            $table->foreign("owner_id")->references("uuid")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
