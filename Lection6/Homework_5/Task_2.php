<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 20.11.15
 * Time: 04:20
 */

/*
    * Задача 2:
    * Да се състави програма, чрез която от клавиатурата се въвеждат
    * последователно две думи с дължина 10-20 знака.
    * Програмата да размени първите им 5 знака и да изведе дължината на
    * по-дългата, както и новото им съдържание.
 *
    * Пример: uchilishe uchenik
 *
    * Изход: 9 uchenishe
*/

$word1 = readline('Enter first word');
$word2 = readline('Enter second word');
$word1 = trim($word1,"\n");                     // Премахваме символа за нов ред
$word2 = trim($word2,"\n");                     // Премахваме символа за нов ред

$len1 = mb_strlen($word1);                      // определяне дължината на първата дума
$len2 = mb_strlen($word2);                      // определяне дължината на втората дума

$minLen = min($len1, $len2);                    // Определяне на мнималната дължина
$maxLen = max($len1, $len2);                    // Определяне на максината дължина

$charToChange = readline('Enter desire number of char to change < ' . $minLen);
for ($i = 0; $i <= $maxLen ; $i += 1) {         // вътрим цикъл до максималната дължина
    if ($len1 > $len2) {                        // проверяваме коя от двете думи е по-дълга
        if ($i < $charToChange) {               // проверяваме дали сместигнали до желания брой елементи за промяна
            $char2 = mb_substr($word2, $i, 1);  // взимаме един по един символите на втората дума
            $newWord[] = $char2;                // записваме елементите в нова дума
        } else {                                // ако сме стигнали желаната бройка
            $char1 = mb_substr($word1, $i, 1);  // взимаме символи от първата дума
            $newWord[] = $char1;                // и ги добавяме към новата
        }
    } else {
        if ($i < $charToChange) {
            $char1 = mb_substr($word1, $i, 1);
            $newWord[] = $char1;
        } else {
            $char2 = mb_substr($word2, $i, 1);
            $newWord[] = $char2;
        }
    }
}
$newWord = implode($newWord);                   // превръщаме новата дума от масив в стринг

//Print
echo 'Word 1 ' . $word1 . ' with len = ' . $len1 - 1 , PHP_EOL;
echo 'Word 2 ' . $word2 . ' with len = ' . $len2 - 1 , PHP_EOL;
echo 'Result ' . $newWord . ' with len = ' . $maxLen , PHP_EOL;