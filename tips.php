<?php

$beer = new Beer();
$beer->SOME();
// No importa si llamamos en mayuscula o minuscula al metodo

class Beer{
    public function some(){
        echo "hago algo";
    }
}