<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataPenumpang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('biodata_penumpang')){
            Schema::create('biodata_penumpang', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('number_phone');
                $table->string('image')->nullable();
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
        Schema::dropIfExists('biodata_penumpang');
    }
}
