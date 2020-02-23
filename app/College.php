<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
