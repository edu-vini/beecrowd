<?php
$distancia  = (float) fgets(STDIN);
$combustivelGasto = (float) fgets(STDIN);

$consumoMedio = $distancia/$combustivelGasto;

echo number_format($consumoMedio,3).' km/l'.PHP_EOL;