<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataBus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('biodata_bus')){
            Schema::create('biodata_bus', function (Blueprint $table) {
                $table->increments('id');
                $table->string('pt_po');
                $table->string('number_plate');
                $table->dateTime('validity_period_kir');
                $table->dateTime('validity_period_trayek');
                $table->string('image')->nullable();
                $table->string('line');
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
        Schema::dropIfExists('schedule');
    }
}
