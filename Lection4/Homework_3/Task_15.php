<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.11.15
 * Time: 07:46
 */

/*
    * Задача 15:
    * Да се състави програма, която въвежда в едномерен масив реални
    * числа.
    * Като изход: програма извежда онези 3 различни числа, чиято
    * абсолютна стойност формира максималната обща сума.
    * Пример: 7.13; 0.2; 4.9; 5.1; 6.34; 1.12
    * Изход: 5.1; 6.34; 7.13
*/

//Enter Values
$end = readline('Enter length of array');
$numberElements = readline('Enter number of desire elements');

for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);
    $numbers[] = $number;
}

//$numbers = [7.13, 0.2, 4.9, 5.1, 6.34, 1.12];

//Body                                                      //Масива се пренарежда по абсолютна стойност
for ($i = 0; $i < $end; $i += 1) {
    for ($j = 0; $j < $end; $j += 1) {
        if (abs($numbers[$i]) < abs($numbers[$j])) {        //Сравняваме елементите по abs стойност
            $mem = $numbers[$i];                            //Запазваме стойността на елемента
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $mem;
        }
    }
}
echo $end-$numberElements , PHP_EOL;
$maxValue = array_slice($numbers, ($end-$numberElements));  //След като е приключило пренареждането взимаме желания брой стойности

//Print
for ($i = 0; $i < $end-($end -$numberElements) ; $i += 1) {
    echo $maxValue[$i] . ', ';
}