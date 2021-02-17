<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articulos(){
        return $this->belongsToMany(Articulo::class);
    }
}
