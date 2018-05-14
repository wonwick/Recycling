<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('collectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->string('description',255);
            $table->integer('rating');
            $table->string('type',45);
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
           /* $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');*/
        });

       

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('collectors');
    }
}
