<?php
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = floatval(fgets(STDIN));

$salario = number_format($b*$c,2,'.','');

echo 'NUMBER = '.$a.PHP_EOL;
echo 'SALARY = U$ '.$salario.PHP_EOL;