<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectorHasWasteContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collector_has_waste_content', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('collector_id')->unsigned();
            $table->bigInteger('wasteContent_id')->unsigned();
            $table->timestamps();
           /* $table->foreign('collector_id')->references('id')->on('collectors')->onDelete('cascade');
            $table->foreign('wasteContent_id')->references('id')->on('waste_contents')->onDelete('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collector_has_waste_content');
    }
}
