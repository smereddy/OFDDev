<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfd6cTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofd6c', function (Blueprint $table) {
            $table->increments('ofd6cid');

            $table->date('todaydate');
            $table->string('corVelID', 256);
            $table->string('attachOFD6d', 256);
            $table->string('contactCorvel', 1);
            $table->string('pathOFD6d', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ofd6c');
    }

}