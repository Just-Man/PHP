<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.11.15
 * Time: 06:36
 */

/*
Задача 12:
Да се състави програма, чрез която по предварително въведени 7
числа в едномерен масив се разменят местата на елементи с индекси:
- 0 и 1 чрез трета променлива;
- 2 и 3 чрез събиране;
- 4 и 5 чрез умножение.
Пример: 1,2,3,4,5,6,7
Изход: 2,1,4,3,6,5,7
*/


//Enter values
$numbers = [];
 for ($i = 0; $i < 7; $i++) {
 	$input = readline('Enter desire elements');

 	if ($input !== '') {
 		$numbers[] = $input;

 	}
 }

//$a = [3, 45, 67, 78, 49, 20, 14];

$j = $numbers[0];
$numbers[0] = $numbers[1];
$numbers[1] = $j;

$numbers[2] += $numbers[3];
$numbers[3] = $numbers[2] - $numbers[3];
$numbers[2] -= $numbers[3];

$numbers[4] *= $numbers[5];
$numbers[5] = $numbers[4] / $numbers[5];
$numbers[4] /= $numbers[5];