<?php

$xy1 = explode(' ', fgets(STDIN));
$x1 = (float) $xy1[0];
$y1 = (float) $xy1[1];

$xy2 = explode(' ', fgets(STDIN));
$x2 = (float) $xy2[0];
$y2 = (float) $xy2[1];

$resultado = sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));

echo number_format($resultado,4).PHP_EOL;

