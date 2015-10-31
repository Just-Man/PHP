<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

/*
    * Задача 12: Да се състави програма, която извежда всички
    * естествени трицифрени числа, които нямат еднакви цифри т.е.
    * 100,101, 606 и т.н. не се извеждат.
*/

//Body % print
for ($i = 101; $i < 998; $i +=1) {
    $thirdDigit = $i % 10;
    $secondDigit = ($i / 10) % 10;
    $firstDigit = ($i / 100) % 10;
    if ($firstDigit != $secondDigit && $secondDigit != $thirdDigit && $firstDigit != $thirdDigit) {
        echo $i , PHP_EOL;
    }
}


/*
echo $firstDigit , PHP_EOL ,
$secondDigit , PHP_EOL ,
$thirdDigit , PHP_EOL;
*/
