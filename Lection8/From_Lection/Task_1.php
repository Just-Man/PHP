<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 24.11.15
 * Time: 11:32
 */
$array = [4,7,3,2,8,5];


//Merge Sort
function partition ($array) {
    $smaller = [];
    $bigger = [];
    $newArray = [];

    $len = count($array) - 1;
    $lastElement = $array[$len];
    for ($i = 0; $i < $len ; $i += 1) {
        if ($array[$i] <= $lastElement) {
            $smaller[] = $array[$i];
        } else {
            $bigger[] = $array[$i];
        }
    }
    $lenSmaller = count($smaller) - 1;
    for ($i = 0; $i <= $len ; $i += 1) {
        if ($i <= $lenSmaller) {
            $newArray[] = $smaller[$i];
        } else {$newArray[] = $bigger[$i];}
    }
    return $newArray;
}

$result = partition($array);
print_r($result);