<?php

    namespace InitiationPOO\Classes\Projet;

    class User
    {
        private $age;
        private $prenom;

        public function __construct($a, $p)
        {
            $this->age = $a;
            $this->prenom = $p;
        }

        public function __toString(){
            return "Bonjour $this->prenom vous avez $this->age ans.";
        }

    }


