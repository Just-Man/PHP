<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 21.11.15
 * Time: 12:35
 */

/*
    * Задача 8:
    * Да се състави програма, чрез която се въвежда ред от символи
    * (стринг, низ).
    * Програмата да изведе на екрана дали въведения стринг е палиндром,
    * т.е. дали четен отляво-надясно и отдясно-наляво е един и същ.
 *
    * Вход: капак
    * Изход: да.
*/

//Declaration of variables
$revText = [];

//Enter values
$text = readline('Enter your text');

//Body
$text = trim($text,"\n");
$len = mb_strlen($text);

for ($i = $len -1; $i >= 0; $i -= 1) {          // Въртим цикъла на обратно за да получим думата обърната
    $char = mb_substr($text, $i, 1);            // Взимаме всеки отделен символ
    $revText[] = $char;                         // Записваме символа
}
$revText = implode($revText);

//Print
if ($revText == $text ) {
    echo 'Text ' . $text . ' is palindrome';
} else {
    echo 'Text ' . $text . ' isn\'t palindrome';
}