<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.11.15
 * Time: 11:32
 */

/*
    * Задача 16:
    * Да се състави програма, чрез която предварително въведени 10
    * реални числа от интервала се обработват по следния начин:
    * 1. Извежда съществуващите числа.
    * 2. Всички елементи със стойност по-малки от -0.231 се заменят със
    * сумата от квадрата на индекса им + числото 41.25, а всички останали
    * елементи се заменят с произведението между самия елемент и
    * неговият пореден номер
    * 3. Да се изведат елементите от началния и новообразувания масив.
    * 4. Да се изведат средната стойност на всички елементи от новата
    * редица, които са различни от 0.
    * Пример: -1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4
    * Изход: 42.25, 45.25, 9.3, 16.8, 0, 38.4, 90.25, 68.8, 81.9,141.25
*/

//Enter Values
$end = readline('Enter length of array');

for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element ' . ($i + 1) . ' of array' . PHP_EOL);

//Body
    $numbers[] = $number;
    #$numbers = [-1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4];
    if ($numbers[$i] < -0.231) {
        $newNumbers[$i] = $i * $i + 41.25;
    } else {
        $newNumbers[$i] = $numbers[$i] * ($i + 1);
    }
    echo $numbers[$i] . ', ';

    echo $newNumbers[$i] . ', ' , PHP_EOL;
}

echo 'Задачата работи коректно спрямо заданието.
В примера отрицателните числа са получени при събирането на квадрата на поредния номер с числото 41.25,
а не от сбора на квадрата на индекса и числото 41.25';