<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('mod',100);
            $table->bigInteger('quantity')->unsigned();
            $table->integer('rating');
            $table->bigInteger('seller_id');
            $table->bigInteger('collector_id');
            $table->bigInteger('waste_id');
            $table->timestamps();
            /*$table->foreign('collector_id')->references('id')->on('collectors')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->foreign('waste_id')->references('id')->on('wastes')->onDelete('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
