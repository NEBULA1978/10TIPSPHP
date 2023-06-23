<?php
calculating(1);
calculating(1);
calculating(5);
calculating(5);
calculating(1);

// Proceso de memorizacion
function calculating($num){
    static $array;

    if(isset($array[$num])){
        echo "Valor existente ".$num."<br>";
        return $array[$num];
    }else{
        echo "Valor no existente" .$num."<br>";
        $array[$num] = $num * 10 + 2;
        return $array[$num];
    }
}