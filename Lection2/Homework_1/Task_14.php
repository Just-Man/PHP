<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.10.15
 * Time: 07:56
 */
/*
    * Задача 14:
    * Да се състави програма, която по въведени координати на 2 позиции
    * от шахматната дъска извежда отговор дали са оцветени в еднакъв или
    * различен цвят.
    * Шахматната дъска е квадратна.
    * Въвеждат се две двойки числа от интервала [1..8].
    * Пример: 2 2 3 2
    * Изход: Позициите са с различен цвят
*/

//Enter value
$zone1Row = readline('Enter row of first zone 1 - 8' . PHP_EOL);
$zone1Col = readline('Enter col of first zone A - H' . PHP_EOL);
$zone2Row = readline('Enter row of first zone A - H' . PHP_EOL);
$zone2Col = readline('Enter col of first zone 1 - 8' . PHP_EOL);

//Body
$zone1Col = strtoupper($zone1Col);
$zone2Col = strtoupper($zone2Col);
$zone1Color = '';
$zone2Color = '';
switch ($zone1Col) {
    case 'A': $zone1Col = 1;
        break;
    case 'B': $zone1Col = 2;
        break;
    case 'C': $zone1Col = 3;
        break;
    case 'D': $zone1Col = 4;
        break;
    case 'E': $zone1Col = 5;
        break;
    case 'F': $zone1Col = 6;
        break;
    case 'G': $zone1Col = 7;
        break;
    case 'H': $zone1Col = 8;
        break;
    default: echo 'You enter uncorrected value';
}
switch ($zone2Col) {
    case 'A': $zone2Col = 1;
        break;
    case 'B': $zone2Col = 2;
        break;
    case 'C': $zone2Col = 3;
        break;
    case 'D': $zone2Col = 4;
        break;
    case 'E': $zone2Col = 5;
        break;
    case 'F': $zone2Col = 6;
        break;
    case 'G': $zone2Col = 7;
        break;
    case 'H': $zone2Col = 8;
        break;
    default: echo 'You enter uncorrected value';
}
echo $zone1Col . $zone2Col . PHP_EOL;
if ($zone1Col % 2) {                //Проверка дали колоната е нечетно число, ако е се проверява и реда
    if ($zone1Row % 2) {            //Проверява се дали реда е нечетно число и ако е цвета трябва да е Черен
        $zone1Color = 'Black';
    } else {
        $zone1Color = 'White';      //ако е четен означава, че цвета е Бял
        }
} else {                            //При четна стойност за колоната
    if ($zone1Row % 2) {            //Нечетните полета приемат Бял цвят
        $zone1Color = 'White';
    } else {
        $zone1Color = 'Black';
    }
}
if ($zone2Col % 2) {
    if ($zone2Row % 2) {
        $zone2Color = 'Black';
    } else {
        $zone2Color = 'White';
        }
} else {
    if ($zone2Row % 2) {
        $zone2Color = 'White';
    } else {
        $zone2Color = 'Black';
    }
}

//Print
if ($zone1Color == $zone2Color) {
    echo 'Zone colors are same and there color is: ' . $zone1Color . PHP_EOL;
} else {
    echo 'Colors are not the same:'. PHP_EOL;
    echo "Color of Zone 1 is: $zone1Color" . PHP_EOL;
    echo "Color of Zone 2 is: $zone2Color" .PHP_EOL;
}