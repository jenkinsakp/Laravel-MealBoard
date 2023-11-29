<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('comment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('menu_id')->references('id')->on('menu');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->text('comment');
            $table->text('comment_type')->comment('check the type iof comment, could be anonymous, open to all e.t.c ');
            $table->softDeletes();
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

        Schema::dropIfExists('menu');

    }
};
