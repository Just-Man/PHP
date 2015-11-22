<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 10.11.15
 * Time: 11:07
 */

$matrix =
    [
        [1, 4, 7, 10],
        [2, 5, 8, 11],
        [3, 6, 9, 12],
    ];

$maxIndex = 0;
$maxSum = null;

foreach ($matrix as $rowIndex => $row) {
    $currentRowSum = 0;
    foreach ($row as $colIndex => $colValue) {
        $currentRowSum += $colValue;
    }
    if (!isset($maxSum) || $currentRowSum > $maxSum) {
        $maxSum = $currentRowSum;
        $maxIndex = $rowIndex;
    }

}

echo $maxIndex . ' ' . $maxSum;