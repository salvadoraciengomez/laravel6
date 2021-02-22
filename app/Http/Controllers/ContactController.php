<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\Mail;
    
    class ContactController extends Controller{
        
        public function show(){

            return view ('contacto');
        }
        
        public function store(){

            //Backend email verification
            request()->validate(['email' => 'required|email']);

            Mail::raw('It sends email!', function ($message){
                $message->to(request('email'))
                    ->subject('HelloThere');
            });

            return redirect('/contact')
            ->with('message', 'Email enviado!');
        }
    }
?>