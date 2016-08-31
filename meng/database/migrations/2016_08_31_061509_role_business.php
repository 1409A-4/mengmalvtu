<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->increments('bid');
            $table->string('bname',30);
            $table->char('bpwd',32);
            $table->string('bemail',30);
            $table->string('bphone',15);
            $table->string('blicence',100);
            $table->string('btruename',30);
            $table->string('bidcard',30);
            $table->string('baddress',30);
            $table->string('bhome',100);
            $table->string('bdescribe',200);
            $table->dateTime('bbtime');
            $table->dateTime('betime');
            $table->char('bip',30);
            $table->tinyInteger('bstatus');
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
        Schema::drop('business');
    }
}
