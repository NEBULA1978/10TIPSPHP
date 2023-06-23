<?php

$array = [1,2,3,4,5];

$result = array_reduce($array, function($carry, $item){
    $carry += $item;
    return $carry;
},1);
// Si quito el uno de arriba despues de la coma da 15 asi 16
echo $result;