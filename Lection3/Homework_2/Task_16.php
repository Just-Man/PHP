 <?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
    * Задача 16:
    * Да се състави програма, чрез която се въвеждат 2 естествени
    * числа N, M от интервала [10..5555].
    * Програмата, чрез цикъл for, да извежда всички числа от
    * интервала, които са кратни на 50 в низходящ ред.
    * Пример: 25,249
    * Изход: 200,150,100, 50.
*/

//Enter value
do{
    $number1 = readline('Enter start value');
    $number2 = readline('Enter end value');
}
    while ($number1 < 10 || $number1 > 5555 && $number2 < 10 || $number2 > 5555);

//Body & print
$start = min($number1, $number2);
$end = max($number1, $number2);
for (; $start < $end; $end -= 1) {
    if (!($end % 50)) {
        echo $end , PHP_EOL;
    }
}
