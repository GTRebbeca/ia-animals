<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_car extends Model
{
    protected $table = 'type_car';
    protected $fillable = [
    	'id',
    	'type',
    	'car'
    ];
}
