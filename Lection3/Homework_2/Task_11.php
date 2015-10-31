<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */
/*
    * Задача 11: Въведете число N, чрез уеб форма и изкарайте като
    * резултат следния триъгълник с височина N:
    *    *
    *   ***
    *  *****
    *
    * Допълнително упражнение – нарисувайте същия
    * триъгълник, но незапълнен.
*/
/*
//Enter value
$height = readline('Enter h');

//Full triangle

//Body & print
$full = 0;
$fullSize = $height * 2;
for ($i = 0; $i < $height; $i += 1) {
    $full = $i + 1;
    for ($j = 0; $j < $full; $j += 1){
        echo '*';
    }
    echo PHP_EOL;
}

// Bordered triangle
echo  PHP_EOL;

$full = 0;
$fullSize = ($height * 2) - 1;

//Body & print
for ($i = 0; $i < $height; $i += 1) {
    $full = $i + 1;
    for ($j = 0; $j < $full; $j += 1){
        if($j == 0 || $j == $full - 1 || $i == $height - 1 || $i == 0){
            echo '*';
        } else {echo ' ';}

    }
    echo PHP_EOL;
}
*/

/*
//Advanced
$i = readline('Enter value');
$j=-1;
$h = 0;

for(;$i>1;$i--)
{
echo  str_repeat(" ",$i-1);
echo  str_repeat('*',$j +=2);
echo PHP_EOL;
}
*/