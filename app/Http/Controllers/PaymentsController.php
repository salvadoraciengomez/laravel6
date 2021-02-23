<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Notification;
    use App\Notifications\PaymentReceived;
    use App\Events\ProductPurchased;
    //use App\Listeners\AwardAchievements;

    class PaymentsController{

        public function create(){
            return view('payments.create');
        }

        public function store(){
            #Prueba para las notificaciones:
            //request()->user()->notify(new PaymentReceived(900));//$amount
                #Otros métodos
                // Notification::send(request()->user(), new PaymentReceived());
                // $user->notify(new PaymentReceived());
            
            #Prueba para eventServiceProvider:
            ProductPurchased::dispatch('toy');
            //event(new ProductPurchased('toy'));
        }
    }
?>