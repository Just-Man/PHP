<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 10:33
 */

/*
* Task2. Write a program that prints all odd numbers between 0 and 50 and all even numbers
* between 51 and 100.
    */

for ($i = 0; $i < 100; $i++) {
    if ($i < 50 && $i % 2) {
        echo $i , PHP_EOL;
    } else if ($i > 50 && !($i % 2)) {
        echo $i , PHP_EOL;
    }
}