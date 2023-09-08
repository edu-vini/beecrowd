<?php
$input = [];

$input[] = fgets(STDIN);
$input[] = fgets(STDIN);

$total = 0;

foreach ($input as $input){
    $aInput = explode(' ',$input);
    $total += $aInput[1]*$aInput[2];
}

$total = number_format($total, 2, '.','');

echo 'VALOR A PAGAR: R$ '.$total.PHP_EOL;