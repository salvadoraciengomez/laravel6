<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function getRouteKeyName(){
        return 'slug';
    }
}
