<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); /* Lecture 9 */
            $table->text('content'); /* Lecture 9 */
            $table->integer('user_id')->unsigned(); /* Lecture 9 */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); /* Lecture 9 */
            $table->integer('object_id')->unsigned(); /* Lecture 9 */
            $table->foreign('object_id')->references('id')->on('objects')->onDelete('cascade'); /* Lecture 9 */
            $table->dateTime('created_at'); /* Lecture 9 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
