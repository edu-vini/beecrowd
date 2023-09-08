<?php

$distancia = (float) fgets(STDIN);

$vX = 60;
$vY = 90;

$tempo = $distancia/($vY-$vX)*60;

echo $tempo.' minutos'.PHP_EOL;