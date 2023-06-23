<?php

// Para ahorrarnos declarar vriables en un get y un post
$arr = ["name"=>"Hector","age"=> 34];

extract($arr);

echo $age;
echo $name;