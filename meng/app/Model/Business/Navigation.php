<?php

namespace App\Model\Business;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    public $timestamps = false;
    protected $table = 'navigation';
    protected $primaryKey='nid';
}
