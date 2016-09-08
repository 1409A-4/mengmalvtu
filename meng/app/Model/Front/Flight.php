<?php

namespace App\Model\Front;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public $timestamps = false;
    protected $table = 'flight';
    protected $primaryKey='f_id';
}