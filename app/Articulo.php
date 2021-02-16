<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //Evita el error mass assingment 
    //al hacer Articulo::create[ArticulosController@store]
    //aceptando los campos definidos
    protected $fillable = ['title','excerpt','body'];

    //Si se prefiere usar la línea de abajo, acepta cualquier request
    //protected $guarded=[];
    
    
    public function getRouteKeyName(){
        return 'slug';
    }
}
