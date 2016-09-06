<?php

namespace App\Model\Business;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public $timestamps = false;
    protected $table = 'business';
    protected $primaryKey='bid';
}
