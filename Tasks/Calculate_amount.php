<?php

function countCurrency($amount)
{
    $notes = [500, 200, 100, 20, 10, 2];
    $noteCounter = [0, 0, 0, 0, 0, 0];
    for ($i = 0; $i < count($notes); $i++) {
        if ($amount >= $notes[$i]) {
            $noteCounter[$i] = intval($amount / $notes[$i]);
            $amount = $amount - $noteCounter[$i] * $notes[$i];
        }
    }
    echo("Currency Count " . "\n");
    for ($i = 0; $i < count($notes); $i++) {
        if ($noteCounter[$i] != 0) {
            echo($notes[$i] . " : " .
                $noteCounter[$i] . "\n");
        }
    }
}

$amount = 1234;
countCurrency($amount);

$defaultSum = 1;
$shortOptions = 'c:';
$longOptions = ['amount:'];
$amountFirst = array_values(getopt($shortOptions, $longOptions))[0];
$amountSecond = $amountFirst ?: $argv[1];
if (!$amountSecond) var_export('Please enter your amount in the terminal variable.');
$notesValue = countCurrency($amountFirst ?: $defaultSum);
var_export($notesValue);