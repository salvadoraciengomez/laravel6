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
    
    
    public function path(){
        return route('articulos.show', $this);
    }

    public function getRouteKeyName(){
        return 'id';
    }

    public function usuario(){
        //Permite desde PHPArtisan Tinker
        //>>> App\Articulo::find(1)->usuario;
        //Devuelve obj Usuario al que corresponde el articulo 1
        return $this->belongsTo(User::class, 'user_id');
        //Por defecto intentaría devolver usuario_id (nombre del método + _id)
        //Por eso como segundo parámetro se le especifica que busque user_id
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
