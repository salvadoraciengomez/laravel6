<?php

    namespace App;

    class Container{
        //Lugar para albergar servicios

        protected $bindings= [];

        public function bind($key, $value){
            $this->bindings[$key]=$value;
        }
    }

?>