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
                $table->string('name');
                $table->string('address');
                $table->string('gender');
                $table->dateTime('date');
                $table->bigInteger('nik');
                $table->bigInteger('number_phone');
                $table->string('image')->nullable();
                $table->integer('id_bus');
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