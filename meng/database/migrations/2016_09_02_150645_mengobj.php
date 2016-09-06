<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mengobj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * session表
         * */
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->integer('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity');
        });
        /*
         * 后台管理员表
         * */
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('uname',30);
            $table->char('upwd',32);
            $table->string('uemail',30);
            $table->dateTime('ubtime');
            $table->dateTime('uetime')->nullable();
            $table->char('uip',30);
            $table->string('uimg',100)->nullable();
            $table->tinyInteger('ustatus')->default(1);
            $table->timestamps();
        });
        /*
         * 角色表
         * */
        Schema::create('role', function (Blueprint $table) {
            $table->increments('rid');
            $table->string('rname',30);
            $table->dateTime('rbtime');
            $table->timestamps();
        });
        /*
         * 用户角色表
         * */
        Schema::create('admin_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->integer('rid');
            $table->timestamps();
        });
        /*
         * 权限表
         * */
        Schema::create('power', function (Blueprint $table) {
            $table->increments('pid');
            $table->string('pname',30);
            $table->string('routename',30);
            $table->dateTime('pbtime');
            $table->timestamps();
        });
        /*
         * 角色权限表
         * */
        Schema::create('role_power', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rid');
            $table->integer('pid');
            $table->timestamps();
        });
        /*
         * 商家表
         * */
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
            $table->dateTime('betime')->nullable();
            $table->char('bip',30);
            $table->tinyInteger('bstatus')->default(0);
            $table->timestamps();
        });
        /*
         * 商品表
         * */
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('gid');
            $table->bigInteger('bid');
            $table->char('gname',30);
            $table->integer('gprice');
            $table->string('gaddress',30);
            $table->string('ghome',100);
            $table->dateTime('gbtime');
            $table->dateTime('getime')->nullable();
            $table->tinyInteger('gstatus')->default(0);
            $table->integer('gstock');
            $table->integer('gvisit')->default(0);
            $table->integer('gsell')->default(0);
            $table->integer('nid');
            $table->timestamps();
        });
        /*
         * 商品图片表
         * */
        Schema::create('goodsimg', function (Blueprint $table) {
            $table->increments('iid');
            $table->bigInteger('gid');
            $table->string('gimg',100);
            $table->timestamps();
        });
        /*
         * 商品订单表
         * */
        Schema::create('goodslist', function (Blueprint $table) {
            $table->increments('lid');
            $table->integer('gid');
            $table->integer('bid');
            $table->integer('uid');
            $table->decimal('gprice');
            $table->dateTime('lbtime');
            $table->dateTime('letime')->nullable();
            $table->tinyInteger('lstatus')->default(0);
            $table->timestamps();
        });
        /*
         * 前台用户表
         * */
        Schema::create('user', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('uname',30);
            $table->char('upwd',32);
            $table->string('uemail',30);
            $table->string('uphone',15);
            $table->dateTime('ubtime');
            $table->dateTime('uetime')->nullable();
            $table->char('uip',30);
            $table->string('uoppid',30)->nullable();
            $table->string('uimg',100);
            $table->tinyInteger('ustatus')->default(1);
            $table->timestamps();
        });
        /*
         * 导航表
         * */
        Schema::create('navigation', function (Blueprint $table) {
            $table->increments('nid');
            $table->string('nname',30);
            $table->dateTime('nbtime');
            $table->integer('nsort');
            $table->integer('pid');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sessions');//session 表
        Schema::drop('admin');//后台管理员表
        Schema::drop('role');//角色表
        Schema::drop('admin_role');//用户角色表
        Schema::drop('power');//权限表
        Schema::drop('role_power');//角色权限表
        Schema::drop('business');//商家表
        Schema::drop('goods');//商品表
        Schema::drop('goodsimg');//商品图片表
        Schema::drop('goodslist');//商品订单表
        Schema::drop('user');//前台用户表
        Schema::drop('navigation');//导航表
        Schema::drop('users');
        Schema::drop('password_resets');
    }
}
