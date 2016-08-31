<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('uname',30);
            $table->char('upwd',32);
            $table->string('uemail',30);
            $table->dateTime('ubtime');
            $table->dateTime('uetime');
            $table->char('uip',30);
            $table->string('uimg',100);
            $table->tinyInteger('ustatus');
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
        Schema::drop('admin');
    }
}
