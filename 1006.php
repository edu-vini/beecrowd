<?php
$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));
$c = floatval(fgets(STDIN));

$media = number_format((($a*2)+($b*3)+($c*5))/10,1,'.','');

echo 'MEDIA = '.$media.PHP_EOL;