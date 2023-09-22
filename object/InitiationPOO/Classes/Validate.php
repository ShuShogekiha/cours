<?php

namespace InitiationPOO\Classes;



class Validate
{
    public static function checkEntier($value){
        if(is_int($value)){
           return "c'est un int";
        }else{
            return "pas un Entier";
        }
    }
}
?>