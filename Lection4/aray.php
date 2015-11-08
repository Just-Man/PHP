<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.11.15
 * Time: 09:07
 */

/*$a = 0;
$b = false;
$d = true;
$c = null;

var_dump(isset($a));
var_dump(empty($a));

$workdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
$counter = count($workdays);

var_dump($counter);
print_r($workdays);

unset($workdays[0]);
print_r($workdays);*/

$zeroIndexArray = [1, 2, 3, 4, 6, 8];
for ($i = count($zeroIndexArray); $i >= 0; $i -=1) {
    unset($zeroIndexArray[$i]);
}
print_r($zeroIndexArray);