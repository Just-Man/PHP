<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 24.11.15
 * Time: 11:01
 */



function binary ($array, $search, $from, $to) {
    if ($from > $to) {
        return -1;
    }
    $middle =  (int)(($from + $to)/2);

    if ($search == $array[$middle]) {
        return $middle;
    } else if ($search > $middle) {
        return binary($array, $search, $middle + 1, $to);
    } else {
        return binary($array,$search, $from, $middle - 1);
    }
}

$array = [1,3,5,7,9,12,14,16,18];

$result = binary ($array, 12, 0, count($array) - 1);
echo $result;