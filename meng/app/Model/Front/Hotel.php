<?php

namespace App\Model\Front;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;
    protected $table = 'hotel';
    protected $primaryKey='f_id';
}