<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.11.15
 * Time: 14:40
 */

/*
    * Задача 4:
    * Да се състави програма, чрез която по въведени начална и крайна
    * цифра се извеждат на всеки нов ред следната последователност
    * (триъгълник от знаци):
 *
    * Пример: 1, 9
    * Изход:
    * 1
    * 1 2
    * 1 2 3
    * ... до
    * 1 2 3 4 5 6 7 8 9
*/
$n = readline('Enter number');
$m = readline('Enter number');

function triangle ($n, $m) {
    if ($m == 0 ) {return 0;}
    echo PHP_EOL;
    for ($i = $n; $i <= $m; $i += 1) {
        echo $i . ' ';

    }

    return triangle($n, $m - 1) . PHP_EOL;
}

triangle($n, $m);


/*
for ($i = $n ; $i <= $m ; $i += 1) {
    for ($j = $n; $j <= $i ; $j += 1) {
        echo $j;
    }
    echo PHP_EOL;
}
*/
