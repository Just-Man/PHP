<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.11.15
 * Time: 09:34
 */

//Sum from 1 to N with loop
/*
$i = 0;
$sum = 0;

$n = readline('Enter number');
*/
/*
while ($i <= $n) {
    $sum += $i;
    $i += 1;
}

echo $sum , PHP_EOL;

//Sum from 1 to N with recursive function


*/

/*
function factorial($n) {
    if ($n <= 0) {              //Дъно на рекурсията, прекъсва функцията
        return 0;               //Дъно на рекурсията, прекъсва функцията
    }
    if ($n == 1) {              //Дъно на рекурсията, прекъсва функцията
        return 1;               //Дъно на рекурсията, прекъсва функцията
    }
    return $n * factorial($n - 1);
}

$factorial = factorial($n);
echo $factorial;
*/

function power($x, $y) {
  if ($y) {
      return $x;
  } else {
    return $x * power($x, $y - 1);
  }
}
$result = power(-1, 134);
echo $result;

