<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 01.12.15
 * Time: 18:43
 */

    $start = microtime();

$matrix = [
            [ -1,  5, 3,  -7,  12],
            [ -8,  9,-5, -14,  16],
            [  6, 15, 87,  1,  -5],
            [-15, 12, 14, 36, 400]
          ];
$countR = 0;
$maxR = 0;
$countC = 0;
$maxC = 0;

$rows = count($matrix);
for ($i = 0; $i < $rows ; $i += 1) {
    $cols = count($matrix[$i]);
    for ($j = 0; $j < $cols ; $j += 1) {
        if ($matrix[$i][$j] < 0) {
            $countR +=1;
        }
        for ($k = 0; $k < $rows ; $k += 1) {
            if ($matrix[$k][$j] > 0) {
                $countC += 1;
            }
        }
        if ($countC > $maxC) {
            $maxC = $countC;
            $col = $j;
        }
        $countC = 0;
    }
    if ($countR > $maxR) {
        $maxR = $countR;
        $row = $i;
        }
        $countR = 0;
}
echo "row is $row and col is $col" , PHP_EOL;

    $end = microtime();

    echo ($end - $start) , PHP_EOL;