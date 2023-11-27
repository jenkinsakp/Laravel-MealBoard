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
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('category_id')->references('id')->on('category');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('name');
            $table->text('body');
            $table->text('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

        Schema::dropIfExists('food');
        Schema::table('food', function (Blueprint $table) {
//            $table->dropForeign('foods_category_id_foreign');
        });
    }
};
