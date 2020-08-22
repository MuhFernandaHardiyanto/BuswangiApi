<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Location extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('location')){
            Schema::create('location', function (Blueprint $table) {
                $table->increments('id');
                $table->string('longitude');
                $table->string('langitude');
                $table->dateTime('date_time');
                $table->integer('id_kernet');
                $table->timestamps();
    
                // $table->foreign('id_biodata_kernet')->references('id')->on('biodata_kernet');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
}
