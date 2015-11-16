<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.11.15
 * Time: 21:26
 */

/*
Задача 8:
Напишете програма, която намира и извежда най-дългата редица от
еднакви поредни елементи в даден масив.
Пример:
Въведете елементите на масива:
2,1,1,2,3,3,2,2,2,1
Максималната редица е: 2 2 2
*/

//Declaration variables
$numbers = [];
$temp = [];
$final = [];
$tempLen = 0;
$finalLen = 0;


//Enter value &n body
$end = readline('Enter number of desire elements');
for ($i = 0; $i < $end ; $i += 1) {
    $number = readline('Enter element of array');
    //Body
    $numbers[] = $number;
    if ($i >= 1) {                                  //Правим проверка дали сме вече на втори елемент от масива
        if ($numbers[$i] === $numbers[$i - 1]) {    //Проверяваме дали текущият елемент е равен на предния
            $temp[] = $numbers[$i];                 //При равенство м/у двата елемента добавяме към временен масив
        } else {                                    //Ако двата елемента не са равни прехвърляме временния и го зануляваме
            $tempLen = count($temp);                //Проверяваме дължината на временния масив
            if ($tempLen > 0){                      //ако тя е по-голяма от 0
                $finalLen = count($final);          //проверяваме и големината на финалният масив
                if ($finalLen < $tempLen) {         //ако е по-малка от тази на временния
                    $final = $temp;                 //финалния става равен на временния,
                    $temp = [];                     //след което зануляваме временния
                } else {
                    $temp = [];                     //Ако дължината на временния е по-малка само го зануляваме
                    }
            }
        }
    }
}

//Print
$tempLen = count($temp);
$finalLen = count($final);
if ($finalLen == $tempLen) {                        //Проверяваме дали дължината на временния и финалния са равни
    $temp[] = $temp[0];                             //Добавяме един елемент заради това че при проверката винаги се изпуска 1
    $final[] = $final[0];                           //Добавяме един елемент заради това че при проверката винаги се изпуска 1
    $finalLen = count($final);
    echo 'Array 1' . ' Array 2' ,PHP_EOL;
    for ($i = 0; $i < $finalLen ; $i += 1) {
        echo  '     ' . $temp[$i] . '     ' . $final[$i] ,PHP_EOL;
    }

} else {
    $final[] = $final[0];
    $finalLen = count($final);
    echo 'Array 1' ,PHP_EOL;
    for ($i = 0; $i < $finalLen ; $i += 1) {
        echo  '   ' . $final[$i] ,PHP_EOL;
    }

}