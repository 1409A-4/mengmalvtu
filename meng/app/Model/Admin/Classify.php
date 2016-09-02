<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Classify extends Model
{
    public $timestamps = false;
    protected $table = 'navigation';
    protected $primaryKey='nid';
}
