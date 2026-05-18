<?php

require __DIR__ . '/vendor/autoload.php';

use ArkhTech\ArkhUniqueId;

$unique = new ArkhUniqueId();

// Configuration parameters
$separator    = '-';
$charTotal    = 12;
$alphaNumeric = true;

// Generate and output the ID
$id = $unique->getUniqueId($separator, $charTotal, $alphaNumeric);

echo $id . PHP_EOL;
// Output example: w9a7-a2w3-S7l2