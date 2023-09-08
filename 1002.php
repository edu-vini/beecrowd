<?php
$raio = (double) fgets(STDIN);

$n = 3.14159;
$area = number_format($n*$raio*$raio,4,'.','');

echo 'A='.$area.PHP_EOL;