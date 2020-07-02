<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataKernet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('biodata_kernet')){
            Schema::create('biodata_kernet', function (Blueprint $table) {
                $table->increments('id');
                $table->string('pt_po');
                $table->string('name');
                $table->string('number_plate');
                $table->string('bus_destination');
                $table->string('time');
                $table->string('validity_period_kir');
                $table->string('validity_period_trayek');
                $table->string('image_bus')->nullable();
                $table->string('image_kernet')->nullable();
                $table->integer('id_users');
                $table->timestamps();
    
                // $table->foreign('id_users')->references('id')->on('users');
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
        Schema::dropIfExists('biodata_kernet');
    }
}