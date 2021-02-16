<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ArticulosController extends Controller
{
    public function index(){
        //Render a list of a resource

        $articulos = Articulo::latest()->get();
        return view('articulos.index',['articulos' => $articulos]);

    }


    public function show($id){
        //Show a single resource
        $articulo = Articulo::findOrFail($id);

        return view('articulos.show',['articulo' => $articulo]);
    }

    public function create(){
        //Muestra una vista para crear un nuevo recurso
        return view('articulos.crear');
    }

    public function store(){
        //Almacena de forma persistente un recurso

        //Validación
        request()->validate([
            // 'title' => ['required', 'min:3', 'max:25'], //Carácteres permitidos
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);


        //Almacenamiento
        $nuevoArticulo = new Articulo();

        $nuevoArticulo->title = request('title');
        $nuevoArticulo->excerpt = request('excerpt');
        $nuevoArticulo->body = request('body');

        $nuevoArticulo->save();

        return redirect('/articulos');
    }

    public function edit($id){
        //Muestra una vista para la edición del recurso
        $articulo = Articulo::find($id);
        //return view('articulos.edit', ['articulo' => $articulo]);
        return view('articulos.edit', compact('articulo'));
    }

    public function update($id){

        request()->validate([
            'title' => ['required', 'min:3', 'max:25'], //Carácteres permitidos
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        //Almacena el recurso editado
        $articulo = Articulo::find($id);

        $articulo->title = request('title');
        $articulo->excerpt = request('excerpt');
        $articulo->body = request('body');

        $articulo->save();

        return redirect('/articulos/'.$articulo->id);

    }
    
    public function destroy(){
        //Elimina el recurso
    }

}
