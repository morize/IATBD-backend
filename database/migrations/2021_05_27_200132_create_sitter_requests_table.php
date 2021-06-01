<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitterRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitter_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sitter_id');
            $table->unsignedBigInteger('pet_id');
            $table->string('owner_name');
            $table->string('pet_name');
            $table->string('sitter_name');
            $table->string('sitter_remarks', 150);
            $table->string('request_status');
            $table->unique(['sitter_id', 'pet_id'], 'unq_ab_comb');

            $table->foreign('sitter_id')->references('id')->on('sitters');
            $table->foreign('owner_name')->references('name')->on('users');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('sitter_name')->references('name')->on('users');
            $table->foreign('request_status')->references('status')->on('sitter_requests_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sitter_requests');
    }
}
