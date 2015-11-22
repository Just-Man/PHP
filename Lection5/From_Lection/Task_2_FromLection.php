<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.11.15
 * Time: 11:40
 */

/*
Едномерен масив наричаме назъбен, ако всеки елемент в
масива е > от предишния и < от следващия. Напишете
програма, която проверява дали даден масив от числа е
назъбен.
*/

$arrays = [];
$upside = 0;
$downside = 0;
/*
do {
    $input = readline('Enter value');
    $arrays[] = $input;
} while ($input !== '');*/
$arrays = [1, 5, 6, 2, 3, 7];
$len = count($arrays);
for ($i = 0; $i < $len - 1; $i += 1) {
    if ($i % 2) {
        if ($i >= 2) {
            if ($arrays[$i - 2] < $arrays[$i - 1] && $arrays[$i - 1] > $arrays[$i]) {
                $upside += 1;
            } else if ($arrays[$i - 2] > $arrays[$i - 1] && $arrays[$i - 1] < $arrays[$i]) {
                $downside += 1;
            }
            if ($upside == $upside || $downside == $downside) {
                echo 'redicata ne e nazybena' , PHP_EOL;
                break;
            }
        }
    }
}

echo 'Upside = ' .$upside , PHP_EOL;
echo 'Downside = ' . $downside , PHP_EOL;


