<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\Mail;
    use App\Mail\ContactMe;

    class ContactController extends Controller{
        
        public function show(){

            return view ('contacto');
        }
        
        public function store(){

            //Backend email verification
            request()->validate(['email' => 'required|email']);

            #Primer método de envío
            // Mail::raw('It sends email!', function ($message){
            //     $message->to(request('email'))
            //         ->subject('HelloThere');
            // });

            #Segundo método de envío a través de plantilla Blade (email en HTML)
            Mail::to(request('email'))
                ->send(new ContactMe());

            return redirect('/contact')
            ->with('message', 'Email enviado!');
        }
    }
?>