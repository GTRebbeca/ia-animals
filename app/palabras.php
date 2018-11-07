<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class palabras extends Model
{
    protected $table = 'palabras';
    protected $fillable = [
    	'id',
    	'palabra',
    ];
}
