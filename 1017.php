<?php
$tempo = (float) fgets(STDIN);
$velocidade  = (float) fgets(STDIN);

$distancia = $velocidade*$tempo;
$consumo = 12;

$combustivelGasto = $distancia/$consumo;

echo number_format($combustivelGasto,3).PHP_EOL;