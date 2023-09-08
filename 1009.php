<?php

$a = fgets(STDIN);
$b = floatval(fgets(STDIN));
$c = floatval(fgets(STDIN));

$comissao  = $c*15/100;
$salario = $comissao + $b;

$salario = number_format($salario,2,'.','');

echo 'TOTAL = R$ '.$salario.PHP_EOL;