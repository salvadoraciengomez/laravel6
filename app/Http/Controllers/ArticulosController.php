<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Tag;
use Illuminate\Support\Facades\View;

class ArticulosController extends Controller
{
    public function index(){
        //Render a list of a resource
        if (request('tag')){
            $articulos= Tag::where('name', request('tag'))->firstOrFail()->articulos;
        }else{
            $articulos= Articulo::latest()->get();
        }
        return view('articulos.index',['articulos' => $articulos]);

    }


    public function show(Articulo $articulo){
        //Show a single resource
        //$articulo = Articulo::findOrFail($id); //was show($id)

        return view('articulos.show',['articulo' => $articulo]);
    }

    public function create(){
        //Muestra una vista para crear un nuevo recurso
        
        return view('articulos.create',[
            'tags' => Tag::all()
        ]);

        //Uso de FirstAvailableView (View Facade)
        //return View::first(['articulos.create']);
    }

    public function store(){
        //Almacena de forma persistente un recurso

        //Validación y Almacenamiento
        $this->validarArticulos();

        $articulo= new Articulo(request(['title','excerpt','body']));
        $articulo->user_id=1;
        $articulo->save();

        $articulo->tags()->attach(request('tags'));

        return redirect(route('articulos.index'));
    }

    public function edit(Articulo $articulo){
        //Muestra una vista para la edición del recurso
        //$articulo = Articulo::find($id);
        //return view('articulos.edit', ['articulo' => $articulo]);
        return view('articulos.edit', compact('articulo'));
    }

    public function update(Articulo $articulo){

        
        //Almacena el recurso editado
        //$articulo = Articulo::find($id);

        $articulo->update($this->validarArticulos());

        return redirect(route($articulo->path()));

    }

    protected function validarArticulos(){
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id' //tiene que existir en tabla tag con dicha id
        ]);
    }
    
    public function destroy(){
        //Elimina el recurso
    }

}
