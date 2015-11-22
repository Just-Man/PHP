<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.11.15
 * Time: 09:46
 */

$array = [1, 2, 3, 4, 5];
$array[0] += 3;
$array[1] += 2;
$array[4] = $array[2] * $array[1];

echo $array[4];

// Creat console script which creat array
$array5 = [1, 2, 3, 4, 5];

    $index = readline('Enter index of array');
//    isset($array5[$index])? unset($array5[$index]); echo 'element is empty';