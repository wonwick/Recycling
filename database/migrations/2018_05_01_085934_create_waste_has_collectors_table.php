<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWasteHasCollectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_has_collectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('waste_id');
            $table->string('collector_id');
            $table->timestamps();
           /* $table->foreign('collector_id')->references('id')->on('collectors')->onDelete('cascade');
            $table->foreign('waste_id')->references('id')->on('waste')->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste_has_collectors');
    }
}
