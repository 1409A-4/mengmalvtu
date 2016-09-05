<?php

namespace App\Model\Front;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    public $timestamps = false;
    protected $table = '机票表';
    protected $primaryKey='主键ID';
}