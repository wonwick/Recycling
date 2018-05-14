<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectingLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collecting_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('latitude',25)->nullable();
            $table->string('longitude',25)->nullable();
            $table->string('address',100)->nullable();
            $table->unsignedBigInteger('collector_id');
            $table->timestamps();
            $table->foreign('collector_id')->references('id')->on('collectors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collecting_locations');
    }
}
