<?php

namespace App\Model\Front;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    public $timestamps = false;
    protected $table = 'rental';
    protected $primaryKey='f_id';
}