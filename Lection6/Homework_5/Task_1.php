<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 18.11.15
 * Time: 14:01
 */
/*
Задача 1:
Да се състави програма, чрез която се въвеждат два низа съдържащи
до 40 главни и малки букви.
Като резултат на екрана да се извеждат низовете само с главни и само
с малки букви.
Пример: Abcd Efgh
Изход: ABCD abcd EFGH efgh
*/

do {
    $input1 = readline('Enter your text');
    $input2 = readline('Enter your text');

    $input1 = mb_strtoupper($input1, 'UTF-8');
    $input2 = mb_strtolower($input2, 'UTF-8');

    echo $input1, PHP_EOL;
    echo $input2, PHP_EOL;
} while ((mb_strlen($input1)) > 40 || (mb_strlen($input2)) > 40);
