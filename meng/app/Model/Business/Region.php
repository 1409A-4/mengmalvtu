<?php

namespace App\Model\Business;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false;
    protected $table = 'region';
    protected $primaryKey='region_id';
}
