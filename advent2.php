<?php

$file = fopen('input.txt', 'r');

if ($file) {
  $i = 1;
  $paperTotal = 0;
  $ribbonTotal = 0;
  while ($line = fgets($file)) {
    $lengths = explode('x', $line);
    $lengths[0] = (int)$lengths[0];
    $lengths[1] = (int)$lengths[1];
    $lengths[2] = (int)$lengths[2];
    sort($lengths);

    $sides = [
      $lengths[0] * $lengths[1],
      $lengths[0] * $lengths[2],
      $lengths[1] * $lengths[2]
    ];

    $paperTotal += ($sides[0] * 3) + ($sides[1] * 2) + ($sides[2] * 2);
    $ribbonTotal += ($lengths[0] * 2) + ($lengths[1] * 2) + ($lengths[0] * $lengths[1] * $lengths[2]);
  }

  echo "Paper Total: " . $paperTotal . "\n";
  echo "Ribbon Total: " . $ribbonTotal . "\n";
}
