<?php

$segundos = (float) fgets(STDIN);

$hora = intdiv($segundos,3600);
$minutos = intdiv($segundos%3600,60);
$segundos = $segundos%3600%60;

echo "$hora:$minutos:$segundos".PHP_EOL;