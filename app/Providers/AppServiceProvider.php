<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // app()->bind('App\Example', function(){
        // $this->app->bind('App\Example', function(){ 
        //Si haces la llamada a bind doblemente, se instancian dos diferentes (a diferencia de con singleton)
        $this->app->singleton('App\Example', function(){
            $collaborator= new \App\Collaborator();
            $foo = 'foobar';

            return new \App\Example($collaborator, $foo);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
