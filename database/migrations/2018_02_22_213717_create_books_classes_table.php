<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
//    {
//        Schema::create('books_classes', function (Blueprint $table) {
//            $table->increments('id');
////            $table->integer('book_id')->unsigned();
////            $table->foreign('book_id')->references('id')->on('books');
////            $table->integer('class_id')->unsigned();
////            $table ->foreign('class_id')->references('id')->on('classes');
//            $table->timestamps();
//        });
//    }
//    $table->integer('user_id')->unsigned();
//$table->foreign('user_id')->references('id')->on('users');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_classes');
    }
}
