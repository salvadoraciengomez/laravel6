<?php
    namespace App\Http\Controllers;

    
    class ContactController extends Controller{
        
        public function show(){
            return view ('contacto');
        }
        
        public function store(){
            $email= request('email');
            dd($email);
        }
    }
?>