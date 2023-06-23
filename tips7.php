<?php

$x="si hat pato";

// Forma antigua
// $pato= isset($x) ? $x : "no hay pato";

// Reducimos lo operadores ternarios
$pato= $x ?? "no hay pato";

echo $pato;