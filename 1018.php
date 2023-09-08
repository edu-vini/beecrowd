<?php
$valor = (float) fgets(STDIN);
$notas = [100, 50, 20, 10, 5, 2, 1];

echo $valor.PHP_EOL;

foreach ($notas as $nota)
{
    $qtdeNotas = intdiv($valor,$nota);
    $valor = $valor%$nota;
    
    echo $qtdeNotas.' nota(s) de R$ '.number_format($nota, 2, ',', '.').PHP_EOL;
}

