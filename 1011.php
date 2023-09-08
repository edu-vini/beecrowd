<?php

$raio = floatval(fgets(STDIN));

$pi = 3.14159;

$volume = (4/3) * $pi * pow($raio,3);
$volume = number_format($volume,3,'.','');

echo 'VOLUME = '.$volume.PHP_EOL;