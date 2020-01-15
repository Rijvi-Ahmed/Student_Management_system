<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTb1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tb1', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('book_name');
            $table->string('book_details');
            $table->string('book_img');
            $table->string('book_location');
            $table->string('book_type');
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
        Schema::dropIfExists('book_tb1');
    }
}
