<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 07:27
 */

/*
    * Задача 12:
    * Високосни години са всички години кратни на 4 с изключения
    * столетията, но без столетия кратни на 400, т.е. 1900 не е високосна,
    * но 1600 и 2000 са високосни.
    * Съставете програма, която по дадени ден, месец, година отпечатва
    * следващата дата.
    * Входни данни: три числа за ден, месец, година.
    * Пример: 28, 2, 2000
    * Изход: 1,3,2000
*/

//Enter value
$day = readline('Enter desire day');
$month = readline('Enter desire month');
$year = readline('Enter desire year');

//Body
switch ($month) {
    case '1' : $monthDays = 31;
        break;
    case '2' : $monthDays = 28;
        break;
    case '3' : $monthDays = 31;
        break;
    case '4' : $monthDays = 30;
        break;
    case '5' : $monthDays = 31;
        break;
    case '6' : $monthDays = 30;
        break;
    case '7' : $monthDays = 31;
        break;
    case '8' : $monthDays = 31;
        break;
    case '9' : $monthDays = 30;
        break;
    case '10' : $monthDays = 31;
        break;
    case '11' : $monthDays = 30;
        break;
    case '12' : $monthDays = 31;
        break;
}
if (!($year % 4) && !($year % 100) && !($year % 400) && $month == 2) {
    echo 'This is leap year';
    $monthDays = 29;
}
if ($day < $monthDays) {
    $day +=1;
} else if ($month < 12){
    $day = 1;
    $month +=1;
} else {
    $day = 1;
    $month = 1;
    $year += 1;
}

//Print result
echo 'day.month.year'. PHP_EOL;
echo $day . '.' . $month . '.'  . $year;