<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.11.15
 * Time: 10:51
 */
$i = 0;
$max = 0;
do {
    $element = readline('Enter element');
//    $i += 1;
    $arrays[] = $element;
    if ($max < $element) {
        $max = $element;
    }
} while ($element != '' && $element);

echo $max . PHP_EOL;
$len = count($arrays) - 1;
$j = 0;while ($j <= $len) {
    if ($j >= 1){
    echo ', ';}
    echo $arrays[$j];
    $j += 1;
}