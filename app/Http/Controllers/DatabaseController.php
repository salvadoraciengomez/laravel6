<?php
    namespace App\Http\Controllers;
    use DB;
    use App\Entrada;

    class DatabaseController{
        public function show($slug){

                //$laEntrada = DB::table('entradas')->where('slug',$slug)->first();
            
                //dd($laEntrada);
                //if (! $laEntrada) abort(404);

                return view('entradas',[
                    'laEntrada' => $laEntrada=Entrada::where('slug',$slug)->firstOrFail() //?? 'No está el índice especificado'
                ]);
        }
    }
?>