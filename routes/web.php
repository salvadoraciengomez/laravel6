<?php

Use Illuminate\Controllers\DatabaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome2');
// });


#Service Containers #1 #2
// Route::get('/', function(){
//     $container= new \App\Container();

//     $container->bind('example', function(){
//         return new \App\Example();
//     });

//     $example = $container->resolve('example');

//     $example->go();
// });

#3
// app()->bind('ejemplo', function(){
//     return new \App\Ejemplo();
// });

// Route::get('/', function(){
//     $ejemplo = resolve('ejemplo'); //Iría al bloque de arriba

//     ddd($ejemplo);
// });

#4 with config\services
// app()->bind('ejemplo', function(){
//     $svc= config('services.svcApi');
//     return new \App\Ejemplo($svc);
// });

// Route::get('/', function(){
//     $ejemplo = resolve('ejemplo'); //Iría al bloque de arriba

//     ddd($ejemplo);
// });

#5 Haciendo el binding a través de resolve e Inyectando tercera Clase Collaborator en Example
// app()->bind('example', function(){
//     return new \App\Example();
// });

#6Otra instanciación
// Route::get('/', function(){
//     $ejemplo = app()->make(App\Example::class); 

//     ddd($ejemplo);
// });

#7YOtra
// Route::get('/', function(App\Example $example){
    
//     ddd($example);
// });

#8 Service Container a través de controlador

Route::get('/', 'PagesController@home');
//Recomendado usar las instanciaciones en AppServiceProvider@register






//Proyecto
Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');


Route::get('/mas', function () {
    return view('mas');
});

Route::get('/articles', function () {
    
    return view('articles',[
        'todos' => App\Articulo::all()
        //'todos' => App\Articulo::latest()->get() //Para ordenarlos por fecha
    ]);
    //return $todos; //JSON
});


Route::get('/old', function () {
    $estaVar= request('datos');
    return view('welcome',[
        'datos' => $estaVar
    ]);
});

Route::get('/entradas/{wildcard}', function ($laEntrada) {

    $misEntradas=[
        'entry' => 'Array 1st entry',
        'entry2' => '2nd array'
    ];

    if (! array_key_exists($laEntrada, $misEntradas)) abort(404,'No está el índicee especificado');

    return view('entradaArr',[
        'laEntrada' => $misEntradas[$laEntrada] //?? 'No está el índice especificado'
    ]);
});

Route::get('/publicaciones/{e}', 'DatabaseController@show');



Route::get('/articulos','ArticulosController@index')->name('articulos.index');
Route::post('/articulos', 'ArticulosController@store');
Route::get('/articulos/crear','ArticulosController@create');
Route::get('/articulos/create','ArticulosController@create');
Route::get('/articulos/{articulo}', 'ArticulosController@show')->name('articulos.show'); 
Route::get('/articulos/{articulo}/editar', 'ArticulosController@edit');
Route::put('/articulos/{articulo}', 'ArticulosController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
