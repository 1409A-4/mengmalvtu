<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('gid');
            $table->bigInteger('bid');
            $table->char('gname',30);
            $table->decimal('gprice',5,2);
            $table->string('gaddress',30);
            $table->string('ghome',100);
            $table->dateTime('gbtime');
            $table->dateTime('getime');
            $table->tinyInteger('gstatus');
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
        Schema::drop('goods');
    }
}
