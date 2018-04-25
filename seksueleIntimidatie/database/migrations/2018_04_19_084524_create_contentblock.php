<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentblock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contentblock', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tekst');
            $table->string('titel')->nullable();
            $table->boolean('ishoofdblok');
           

            $table->integer('websectionid');
            $table->foreign('websectionid')->references('id')->on('websection');

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
        //
        Schema::drop('contentblock');
    }
}
