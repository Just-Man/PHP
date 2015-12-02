<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.11.15
 * Time: 09:34
 */
/*
Задача 2:
Ще наричаме площадка непрекъсната последователност от елементи с
равни стойности.
Да се състави програма, която проверява коя е най-дългата площадка
в предварително въведен масив от естествени числа.
Програмата да извежда началния вид на масива и най-дългата
площадка в него.
Пример:
1 3 3 7 9 9 9 9 11 11 12 14
Изход:
Най-дългата площадка е: 4 елемента
Брой на площадките: 3
*/

//Declaration variables
$numbers = [];
$temp = [];
$final = [];
$tempLen = 0;
$finalLen = 0;
$count = 0;


//Enter value &n body
$end = readline('Enter number of desire elements');
for ($i = 0; $i < $end ; $i += 1) {
    /*$number = readline('Enter element of array');
    //Body
    $numbers[] = $number;*/
    $numbers = [1, 3, 3, 7, 9, 9, 9, 9, 11, 11, 12, 14];
    if ($i >= 1) {                                  //Правим проверка дали сме вече на втори елемент от масива
        if ($numbers[$i] === $numbers[$i - 1]) {    //Проверяваме дали текущият елемент е равен на предния
            $temp[] = $numbers[$i];                 //При равенство м/у двата елемента добавяме към временен масив
        } else {                                    //Ако двата елемента не са равни прехвърляме временния и го зануляваме
            $tempLen = count($temp);                //Проверяваме дължината на временния масив
            if ($tempLen > 0){                      //ако тя е по-голяма от 0
                $count += 1;
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
    echo 'Number of areas is: ' . $count;

} else {
    $final[] = $final[0];
    $finalLen = count($final);
    echo 'Array 1' ,PHP_EOL;
    for ($i = 0; $i < $finalLen ; $i += 1) {
        echo  '   ' . $final[$i] ,PHP_EOL;
    }
    echo 'With length = ' . $finalLen;
    echo 'Number of areas is: ' . $count;

}
