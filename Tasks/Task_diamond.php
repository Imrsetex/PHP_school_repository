<?php

echo PHP_EOL;

for ($i = 1; $i < 7; $i++) {
    for ($j = $i; $j <= 7; $j++)
        echo "  ";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo (" *");
    echo PHP_EOL;
}

$k = 8;

for ($i = 5; $i > 0; $i--) {
    for ($j = $k - $i; $j > 0; $j--)
        echo "  ";
    for ($j = 2 * $i - 0; $j > 1; $j--)
        echo (" *");
    echo PHP_EOL;
}
echo PHP_EOL;
