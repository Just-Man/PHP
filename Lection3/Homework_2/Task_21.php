<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
    * Задача 21:
    * Дадено е наредено тесте карти.
    * Наредбата по тежест на карта е: 2,3,4,5,6,7,8,9,10, Вале, Дама,
    * Поп, Асо.
    * Наредбата по цвят на картите е: спатия, каро, купа, пика.
    * clubs (♣), diamonds (♦) hearts (♥), and spades (♠)
    * Да се създаде програма, чрез която се въвежда N - число от
    * интервала [1..51] и се извеждат въведения номер карта и
    * останалите по-големи карти от тестето.
    * Пример: 47.
    * Изход: Поп купа, Поп пика, Асо спатия, Асо каро, Асо купа, Асо
    * пика:
*/
//Enter value
$numberCard = readline('Enter number card between 1 and 51');
$start = microtime();

//Declaration
$card = '';
$color = '';

//Body & print
    $cardColor = $numberCard % 4;
    if ($cardColor == 0) {
        $cardNumber = $numberCard;
    } else {
        $cardNumber = floor($numberCard / ($cardColor + 1));}
for ($i = $cardNumber; $i < 13; $i += 1) {
    for ($j = $cardColor; $j <= 4; $j += 1) {
        switch ($j) {
            case 1:
                $color = 'clubs (♣)';
                break;
            case 2;
                $color = 'diamonds (♦)';
                break;
            case 3:
                $color = 'hearts (♥)';
                break;
            case 4:
                $color = 'spades (♠)';
                break;
            default:
        }

        switch ($i) {
            case 0:
                $card = '2';
                break;
            case 1:
                $card = '3';
                break;
            case 2:
                $card = '4';
                break;
            case 3:
                $card = '5';
                break;
            case 4:
                $card = '6';
                break;
            case 5:
                $card = '7';
                break;
            case 6:
                $card = '8';
                break;
            case 7:
                $card = '9';
                break;
            case 8:
                $card = '10';
                break;
            case 9:
                $card = 'Jack';
                break;
            case 10:
                $card = 'Queen';
                break;
            case 11:
                $card = 'King';
                break;
            case 12:
                $card = 'Ace';
                break;
        }
        echo 'Card is: ' . $card . ' ' . $color . PHP_EOL;
    }
    $cardColor = 0;
    echo PHP_EOL;
}

    $end = microtime();

    echo 'First complete in: ' . ($end - $start) , PHP_EOL;