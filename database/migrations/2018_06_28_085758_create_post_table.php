<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category');
            $table->integer('id_user');
            $table->string('title');
            $table->string('alias');
            $table->longText('description');
            $table->longText('content');
            $table->string('thumb');
            $table->enum('type', ['public', 'pending']);
            $table->integer('slishow')->comment('1->show slishow,2 hide slishow');
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
