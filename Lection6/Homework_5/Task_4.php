<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 20.11.15
 * Time: 08:06
 */

/*.
    * Задача 4:
    * Да се състави програма, чрез която по въведени трите имена на двама
    * човека разделени със запетая, се извежда чие име има по-голям сбор
    * от ASCII кодовете на съставящите името букви.
    * Пример: Anna Dosewa Asenowa, Iwo Peew Peew
    * Изход: Anna Dosewa Asenowa
*/
//Declaration of values
$lenPerson = [];
$sumPerson = null;
$sum = [];
$counter = 0;

//Enter values
$names = readline('Enter full names separated as coma');
$names = trim($names,"\n");                                 // Премахваме символа за нов ред ор края на стринга
$name = explode(',', $names);                               // разбиване на стринга на отделни елементи
$lenName = count($name);                                    // проверка на броя елементи получили се от разбиването
do {
    $number = readline(' Enter desire number of names');    //
} while ($number > $lenName);                               // проверка дали въведения брой не е по-голям от въведените имена

//Body
for ($i = 0; $i < $lenName ; $i += 1) {                     // въртим цикъл докато не проверим всички имена
    $lenPerson [] = mb_strlen($name[$i]);                   // взимаме дължината на всяко отделно въведено име
    for ($j = 0; $j < $lenPerson[$i] ; $j += 1) {           // въртим цикъл за всяко отделно име
        $char = mb_substr($name[$i],$j, 1);                 // взимаме всяка буква
        $sumPerson += ord($char);                           // превръщаме я в число и след това го прибавяме към сумата
    }
    $sum += array($name[$i] => $sumPerson);                 // взимаме получената сума и я вкарваме в асоциативен масив заедно с името
    $sumPerson = 0;                                         // зануляваме сумата за следващото име
}
arsort($sum);                                               // сортираме масива по сумата на отделните имена

//Print
foreach ($sum as $singleName => $sumValue) {                // въртим цикъл за да искараме отделните имена и тяхната сума
    $counter += 1;                                          // брояч служещ за отброяване на изведените имена
    if ($counter <= $number) {                              // проверяваме дали сме извели достатъчен брой имена
        echo $counter . '.) ' . $singleName .               // ако не сме продължаваме до достигане на желаният брой
            ' with sum of char = '. $sumValue
        , PHP_EOL;
    } else {
        break;                                              // при достигане на желания брой прекъсваме цикъла
    }
}
