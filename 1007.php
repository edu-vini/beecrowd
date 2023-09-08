<?php
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));
$d = intval(fgets(STDIN));

$ab = $a*$b;
$cd = $c*$d;

$diferenca = $ab - $cd;

echo 'DIFERENCA = '.$diferenca.PHP_EOL;