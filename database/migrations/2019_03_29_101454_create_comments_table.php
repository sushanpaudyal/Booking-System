<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content'); /* Lecture 8 */
            $table->string('commentable_type'); /* Lecture 8 */
            $table->integer('commentable_id'); /* Lecture 8 */
            $table->integer('rating'); /* Lecture 8 */
            $table->integer('user_id')->unsigned(); /* Lecture 8 */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); /* Lecture 8 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
