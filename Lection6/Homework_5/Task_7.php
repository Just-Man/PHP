<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 21.11.15
 * Time: 11:03
 */

/*
Задача 7:
Да се състави програма, която чете набор от думи разделени с
интервал.
Като резултат да се извеждат броя на въведените думи, както и броя
знаци в най-дългата дума.
Пример: asd fg hjkl
Изход: 3 думи, най-дългата е с 4 символа.
    */
//Enter values
$text = readline('Enter your text');

//Body
$text = trim($text,"\n");
$words = explode(' ',$text);
$len = count($words);
$lenWord = 0;

for ($i = 0; $i < $len ; $i += 1) {
    $lenWord = mb_strlen($words[$i]);
    if ($i >= 1) {
        if ($lenWord[$i - 1] < $lenWord[$i]  ) {
            $lenWord = $lenWord[$i];
        }
    }
}

//Print
echo 'Text contains ' . $len . ' words and max length for word is = ' . $lenWord . ' char';