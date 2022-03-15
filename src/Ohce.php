<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{

    private String $name = "Ainhoa";

    public function revert(string $string)
    {
        if(str_contains($string, " ")) {
            $separatedString = explode(" ", $string);
            $this->name = $separatedString[1];
            return "Hola " .$this->name;
        }
        elseif ($string === "Stop!"){
            return "Adiós ".$this->name;

        }
        elseif($string === strrev($string))
            return "¡Bonita Palabra!";
        else
            return strrev($string);
    }
}