<?php

    namespace App;

    class Container{
        //Lugar para albergar servicios

        protected $bindings= [];

        public function bind($key, $value){
            $this->bindings[$key]=$value;
        }

        public function resolve($key){
            // if (isset($this->bindings[$key])) return $this->bindings[$key]; //returns Closure
            if (isset($this->bindings[$key])) return call_user_func($this->bindings[$key]); //returns Example Class
        }
    }

?>