<?php
    namespace App\Http\Controllers;
    //use Illuminate\Support\Facades\Route;
    use Illuminate\Routing\Router;

    class EntriesController{
        public function show($laEntrada){

                $misEntradas=[
                    'entry' => 'Array 1st entry',
                    'entry2' => '2nd array'
                ];
            
                if (! array_key_exists($laEntrada, $misEntradas)) abort(404,'No está el índicee especificado');
            
                return view('entradas',[
                    'laEntrada' => $misEntradas[$laEntrada] //?? 'No está el índice especificado'
                ]);
        }
    }
?>