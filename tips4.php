<?php

some(1,2,"hola");

function some(){
    $args = func_get_args();

    echo $args[0];#1
    echo $args[1];#2
    echo $args[2];#3
}