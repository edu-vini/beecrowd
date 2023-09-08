<?php

$input = fgets(STDIN);
$aInput = explode(' ',$input);

$a = floatval($aInput[0]);
$b = floatval($aInput[1]);
$c = floatval($aInput[2]);

$tri = ($a*$c)/2;
$cir = (3.14159 * pow($c,2));
$tra = (($a+$b)*$c)/2;
$qua = pow($b,2);
$ret = $a * $b;

echo 'TRIANGULO: '.number_format($tri,3,'.','').PHP_EOL;
echo 'CIRCULO: '.number_format($cir,3,'.','').PHP_EOL;
echo 'TRAPEZIO: '.number_format($tra,3,'.','').PHP_EOL;
echo 'QUADRADO: '.number_format($qua,3,'.','').PHP_EOL;
echo 'RETANGULO: '.number_format($ret,3,'.','').PHP_EOL;