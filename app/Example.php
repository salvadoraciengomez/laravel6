<?php

    namespace App;

    

    class Example{

        protected $collaborator;
        
        public function __construct(Collaborator $collaborator){
            $this->collaborator=$collaborator;
        }
    }

?>