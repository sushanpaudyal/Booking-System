<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('day_in'); /* Lecture 9 */
            $table->date('day_out'); /* Lecture 9 */
            $table->boolean('status'); /* Lecture 9 */
            $table->integer('user_id')->unsigned(); /* Lecture 9 */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); /* Lecture 9 */
            $table->integer('city_id')->unsigned(); /* Lecture 9 */
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade'); /* Lecture 9 */
            $table->integer('room_id')->unsigned(); /* Lecture 9 */
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade'); /* Lecture 9 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
