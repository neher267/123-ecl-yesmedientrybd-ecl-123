<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $fillable= [
    	'name',
	    'age',
	    'email',
	    'phone',
	    'state',
	    'location',
	    'investment',
	    'prefertostart',
    ];
}
