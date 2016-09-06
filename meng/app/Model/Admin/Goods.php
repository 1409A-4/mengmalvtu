<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public $timestamps = false;
    protected $table = 'goods';
    protected $primaryKey='gid';
}