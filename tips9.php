<?php

// Para ahorrarnos declarar vriables en un get y un post
$arr = ["name"=>"Hector","age"=> 34];

// Creamos de arreglo a json
// echo json_encode($arr);
$json = json_encode($arr);

// El json convertimos en objeto
$obj=json_decode($json);

var_dump($obj);