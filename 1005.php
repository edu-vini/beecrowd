<?php

$A = (double) fgetS(STDIN);
$B = (double) fgetS(STDIN);

$MEDIA = number_format((($A * 3.5) + ($B * 7.5))/11,5,'.','');

echo 'MEDIA = '.$MEDIA.PHP_EOL;