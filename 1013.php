<?php


$input = fgets(STDIN);
$aInput = explode(' ',$input);

$a = floatval($aInput[0]);
$b = floatval($aInput[1]);
$c = floatval($aInput[2]);

$maiorAB = ($a+$b+abs($a-$b))/2;
$maior = ($maiorAB + $c + abs($maiorAB - $c))/2;

echo $maior.' eh o maior'.PHP_EOL;
