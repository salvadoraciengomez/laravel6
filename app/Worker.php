<?php
    namespace App;
    class Worker{

        public function __construct($apiKey){
            $this->apiKey=$apiKey;
        }

        public function handle(){
            die('It Works!');
        }
    }
?>