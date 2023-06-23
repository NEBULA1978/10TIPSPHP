<?php

$arr1 = [1,2,3,7,8];
$arr2 = [4,5,6];

$arr3 = [...$arr1, 10, "hola", ...$arr2];

var_dump($arr3);

// Resultado por consola
// next@rases:~/Documentos/10tipsPHP$ php tips6.php 
// array(10) {
//   [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   int(3)
//   [3]=>
//   int(7)
//   [4]=>
//   int(8)
//   [5]=>
//   int(10)
//   [6]=>
//   string(4) "hola"
//   [7]=>
//   int(4)
//   [8]=>
//   int(5)
//   [9]=>
//   int(6)
// }
// next@rases:~/Documentos/10tipsPHP$ 