<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 19.11.15
 * Time: 11:30
 */
$array = [7,3,9,6,5,1,2,0,8,4];

$end = count($array);//readline('');
$counter = 0;

for ($i = 0; $i < $end; $i += 1) {
    $counter += 1;
    $tempIndex = 0;
    $temp = $array[0];
    $swap = false;
    for ($j = 0; $j < $end - $i; $j += 1) {
    $counter += 1;
        if ($temp < $array[$j]) {
            $temp = $array[$j];
            $tempIndex = $j;
            $swap = true;
        }
    }
    $array[$tempIndex] = $array[$end - $i - 1];
    $array[$end - $i - 1] = $temp;
//    if (!$swap) {break;}
}

print_r($array);
echo $counter;