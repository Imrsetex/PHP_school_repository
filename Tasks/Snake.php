<?php

$MAX = 5;
$i = 0;
$numArr = [];

while ($i < $MAX ** 2) {
    $dividend = intdiv($i, $MAX);
    $numArr[$dividend][] = $i + 1;
    $i++;
}

$i = 0;
while ($i < $MAX) {
    if ($i % 2) {
        $numArr[$i] = array_reverse($numArr[$i]);
    }
    $i++;
}

$z = 0;
while ($z < $MAX) {
    $f = 0;
    while ($f < $MAX) {
        echo $numArr[$f][$z] . ' ';
        $f++;
    }
    echo PHP_EOL;
    $z++;
}