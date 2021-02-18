<?php
    namespace App;

    use Illuminate\Support\Facades\Facade;

    class WorkerFacade extends Facade{

        protected static function getFacadeAccessor(){
            return 'worker';
        }

    }
?>