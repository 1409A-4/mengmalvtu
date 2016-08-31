<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleGoodslist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodslist', function (Blueprint $table) {
            $table->increments('lid');
            $table->integer('gid');
            $table->integer('bid');
            $table->integer('uid');
            $table->decimal('gprice');
            $table->dateTime('lbtime');
            $table->dateTime('letime');
            $table->tinyInteger('lstatus');
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
        Schema::drop('goodslist');
    }
}
