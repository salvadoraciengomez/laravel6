<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gate establece un permiso entre el usuario autenticado y una acción permitida
        Gate::define('update-conversation', function($user, $conversation){
            //si devuelve true, cualquier usuario logueado podría hacer  @can('update-conversation')
            //para permitir invitados, hay que especificar function(?User $user, Conversation $conversation)
            //return true;
            return $conversation->user->is($user); //Solo permite can update-conversation si la Conversation pertenece al usuario logueado
        });
    }
}
