<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 21.11.15
 * Time: 21:17
 */


/*
    * Задача 10:
    * Да се състави програма, която по даден низ връща друг,
    * символите, на който са получени като към всеки код на символ
    * от ASCII таблицата е добавеното числото 5 и е записан
    * новополучения символ.
 *
    * Пример :
    * Вход: Hello
    * Изход: Mjqqt
*/

//Declaration of variables
$newText = '';

//Enter value
$text = readline('Enter your text');

//Body
$text = trim($text, "\n");

$len = mb_strlen($text);

for ($i = 0; $i < $len ; $i += 1) {
    $char = mb_substr($text, $i, 1);
    $charAscii = ord($char) + 5;
    $changedChar = chr($charAscii);
    $newText .= $changedChar;
}

//Print
echo $newText;