<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 20.11.15
 * Time: 17:00
 */

/*
	* Задача 5:
	* Да се състави програма, чрез която се въвеждат 2 редици от знаци
	* (думи).
	* Ако в двете редици участва един и същи знак, да се изведе на екрана
	* първата редица хоризонтално, а втората вертикално, така че да се
	* пресичат в общия си знак.
	* Ако редиците нямат общ знак да се изведе само уведомително
	* съобщение.
 *
	* Пример :
	* м
	* а
	* шапка
	* и
	* н
	* а
*/
$number = null;

//Enter values
$word1 = readline('Enter first word');
$word2 = readline('Enter second word');

//Body
$word1 = trim($word1,"\n");
$word2 = trim($word2,"\n");

$len1 = mb_strlen($word1);
$len2 = mb_strlen($word2);

$minLen = min($len1, $len2);

for ($i = 0; $i <= $minLen ; $i += 1) {         //Въртим цикъл за да вземем символите един по един
    $char1 = mb_substr($word1, $i, 1);          // взимаме всеки отделен символ
    $number = mb_stripos($word2, $char1);       // проверяваме дали дадения символ го има в другата дума
    if ($number) {                              // ако го има прекъсваме цикъла
        break;
    }
}

//Print
for ($j = 0; $j < $len2 ; $j += 1) {            // Въртим цикъл за създаване на редовете с дължината = втората дума
    for ($k = 0; $k < $len1 ; $k += 1) {        // Въртим цикъл за създаване на колините с дължината = първата дума
        if ($k == $i) {                         // ако номера на колоната съвпада с номера на съвпадащата буква от първата дума
            $char2 = mb_substr($word2, $j, 1);  // взимаме всяка отделна буква
            echo $char2;                        // и я принтираме
        } else if ($j == $number) {             // ако номера на реда съвпада с номера на съвпадащата буква от втората дума
            $char1 = mb_substr($word1, $k, 1);  // взимаме всяка отделна буква
            echo $char1;                        // и я принтираме
        } else {                                // ако никое от двете условия не е изпълнено
            echo ' ';                           // принтираме празно място
        }
    }
    echo PHP_EOL;

}