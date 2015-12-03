<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 10.11.15
 * Time: 16:04
 */
/*
Задача 12: Да се състави програма, която извежда всички естествени трицифрени числа,
които нямат еднакви цифри т.е. 100, 101, 606 и т.н. не се извеждат.
    */

for ($a = 0; $a <= 9; $a++) {
	for ($b = 0; $b <= 9; $b++) {
		for ($c = 0; $c <= 9; $c++) {
			if ($a != $b && $a != $c && $b != $c && $a != 0) {
				echo $a.$b.$c, PHP_EOL;
			}
		}
	}
}
/*Задача 13: Да се състави програма, която извежда всички естествени трицифрени числа,
 които имат сбор на цифрите равен на дадено число.
Дадено : sum, където 2>=sum<=27.
Пример: 26
Изход: 899, 989, 998.*/

$sum = readline('Въведете число от интервала [1...27] ');
for ($a = 0; $a <= 9; $a++) {
	for ($b = 0; $b <= 9; $b++) {
		for ($c = 0; $c <= 9; $c++) {
			if ($a+$b+$c == $sum) {
				echo $a.$b.$c, ', ';
			}
		}
	}
}