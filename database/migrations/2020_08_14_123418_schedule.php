<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Schedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('schedule')){
            Schema::create('schedule', function (Blueprint $table) {
                $table->increments('id');
                $table->dateTime('terminal_brwj');
                $table->dateTime('terminal_rgj');
                $table->dateTime('terminal_srn');
                $table->dateTime('terminal_bcl');
                $table->dateTime('terminal_jjg');
                $table->dateTime('terminal_gtg');
                $table->integer('id_kernet');
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
