<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable= [
    	'name', 
    	'email', 
    	'mobile', 
    	'whatsapp', 
    	'college_type', 
    	'college', 
    	'city',
    	'state', 
    	'zip',
    	'passing_year',
        'neet_score',
    	'status'
    ];
}
