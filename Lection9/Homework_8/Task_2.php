<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 01.12.15
 * Time: 16:51
 */

/*
Задача 2: Използвайки разделянето на масива на части
(партишъни) напишете програма, която да намира k-тия най-
голям елемент в масив.
Пример :
Масив [5, 8, 73, 0, 43, 3424, 78, 98], k = 3
Изход : 78
Масив [5, 8, 73, 0, 43, 3424, 78, 98], k = 1
Изход : 3424
*/

$numbers = [5, 8, 73, 0, 43, 3424, 78, 98];
$k = (int) readline('Enter K');
$len = count($numbers);
$middle = (int) floor($len/2);
$pivot = $numbers[$middle];
$bigger = [];
$counter = 0;

for ($i = 0; $i < $len; $i += 1) {
    if ($numbers[$i] >= $pivot) {
        $bigger[] = $numbers[$i];
        $counter +=1;
        if ($counter == $k ) {
            break;
        }
    }
}
print_r($bigger);