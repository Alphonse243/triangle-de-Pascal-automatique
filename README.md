# Triangle de Pascal Automatique

Ce projet génère automatiquement le Triangle de Pascal en PHP.

## Description

Le Triangle de Pascal est une représentation triangulaire des coefficients binomiaux. Ce projet permet de générer dynamiquement le triangle jusqu'au nombre de lignes souhaité.

## Prérequis

- PHP 7.4 ou plus récent

## Installation

1. Clonez le dépôt :

   ```bash
   git clone https://github.com/Alphonse243/triangle-de-Pascal-automatique.git

<?php
function generatePascalTriangle($n) {
    $triangle = [];

    for ($i = 0; $i < $n; $i++) {
        $triangle[$i] = [];
        $triangle[$i][0] = 1;
        for ($j = 1; $j < $i; $j++) {
            $triangle[$i][$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
        }
        $triangle[$i][$i] = 1;
    }

    return $triangle;
}

function printPascalTriangle($triangle) {
    foreach ($triangle as $row) {
        echo implode(' ', $row) . "\n";
    }
}

$n = intval(readline("Entrez le nombre de lignes pour le Triangle de Pascal: "));
$triangle = generatePascalTriangle($n);
printPascalTriangle($triangle);
?>
