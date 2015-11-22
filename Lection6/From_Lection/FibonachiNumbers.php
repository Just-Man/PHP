<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.11.15
 * Time: 11:30
 */

$end = readline('Enter length of array');
function fibonacciNumbers ($end)
{
    $number = 1;
    $numbers = [];
//Body
    for ($i = 0; $i <= $end; $i += 1) {
        if ($i <= 1) {
            $numbers[] = $number;
        } else {
            $numbers[] = ($numbers[$i - 2] + $numbers[$i - 1]);
        }
        echo $numbers[$i] . ' ';
    }
}

//fibonacciNumbers($end);
echo PHP_EOL;


/*
function fibo ($n) {
    $fibo = 0;
    if ($n <= 1){
        echo 0;
        return 0;
    }
    if ($n == 2) {
        echo 1;
        return 1;
    }
    $fibo = fibo($n - 1) + fibo($n - 2);
    echo $fibo . ' ';
    return $fibo;
}
$result = fibo($end);
echo $result . ' ';*/

function fibonacci ($end){
    $number = null;
    if ($end <= 1) {
            echo $end;
        } else {
            $number = (fibonacci($end - 2) + fibonacci($end - 1));
        }
        echo $number . ' ';
    }

fibonacci($end);