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

//Body & print
for ($i= 0; $i < 51 ;$i += 1) {
    $colors = $i % 13;
    if ($colors == 0) {
        $cards = $i;
    } else {
        $cards = $i % $colors +1;}

    if ($i >= $numberCard) {
        switch ($colors) {
        case 1:
            $color = 'diamonds (♦)';
        case 2:
            $color = 'hearts (♥)';
        case 3:
            $color = 'spades (♠)';
        default: $color = 'clubs (♣)';
    }

        switch ($cards) {
            case 0:
                $card = '2';
            case 1:
                $card = '3';
            case 2:
                $card = '4';
            case 3:
                $card = '5';
            case 4:
                $card = '6';
            case 5:
                $card = '7';
            case 6:
                $card = '8';
            case 7:
                $card = '9';
            case 8:
                $card = '10';
            case 9:
                $card = 'Jack';
            case 10:
                $card = 'Queen';
            case 11:
                $card = 'King';
            case 12:
                $card = 'Ace';
        }
        echo 'Card is: ' . $color . $card . PHP_EOL;
    }
}
