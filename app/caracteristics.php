<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caracteristics extends Model
{
    protected $table = 'caracteristics';
    protected $fillable = [
    	'id',
    	'name',
    ];
}
