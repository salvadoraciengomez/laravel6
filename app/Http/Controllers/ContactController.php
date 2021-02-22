<?php
    namespace App\Http\Controllers;

    
    class ContactController extends Controller{
        
        public function show(){

            return view ('contacto');
        }
        
        public function store(){

            //Backend email verification
            request()->validate(['email' => 'required|email']);

            $email= request('email');
            dd($email);
        }
    }
?>