<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Complaint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('complaint')){
            Schema::create('complaint', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_penumpang');
                $table->integer('id_kernet');
                $table->string('message');
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
        Schema::dropIfExists('complaint');
    }
}
