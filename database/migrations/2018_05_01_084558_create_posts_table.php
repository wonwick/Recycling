<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('content',500);
            $table->bigInteger('maintainer_id')->unsigned();
            $table->timestamps();
           // $table->foreign('maintainer_id')->references('id')->on('maintainers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *t
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
