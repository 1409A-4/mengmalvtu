<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('third', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uname',30);
            $table->string('uimg',100);
            $table->string('uniq',50);
            $table->string('from',50);
            $table->char('uip',30);
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
        Schema::drop('third');
    }
}
