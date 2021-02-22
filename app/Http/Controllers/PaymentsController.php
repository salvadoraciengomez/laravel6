<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Notification;
    use App\Notifications\PaymentReceived;

    class PaymentsController{

        public function create(){
            return view('payments.create');
        }

        public function store(){
            // Notification::send(request()->user(), new PaymentReceived());
            request()->user()->notify(new PaymentReceived());
        }
    }
?>