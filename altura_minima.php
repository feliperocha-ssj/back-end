<?php
$qb = 6; $ac = 138;
$alturas = [120 , 130 , 125 , 145 , 140 , 135 ];
$c = 0;
if ($ac >= $alturas[0]) $c = $c + 1;
if ($ac >= $alturas[1]) $c = $c + 1;
if ($ac >= $alturas[2]) $c = $c + 1;
if ($ac >= $alturas[3]) $c = $c + 1;
if ($ac >= $alturas[4]) $c = $c + 1;
if ($ac >= $alturas[5]) $c = $c + 1;
echo "$c";
?>
