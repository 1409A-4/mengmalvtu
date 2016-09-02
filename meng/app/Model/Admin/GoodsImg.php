<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsImg extends Model{
    public $timestamps = false;
    protected $table = 'goodsimg';
    protected $primaryKey='iid';
}
