<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 26.10.15
 * Time: 07:19
 */
/*
    * Задача 7:
    * Въведете 3 променливи от конзолата – час, сума пари, дали съм здрав
    * – число със стойност да или не.
    * Съставете програма, която взема решения на базата на тези данни по
    * следния начин:
    *  - ако съм болен няма да излизам
    *  - ако имам пари ще си купя лекарства
    *  - ако нямам – ще стоя вкъщи и ще пия чай
    *  - ако съм здрав ще изляза на кино с приятели
    *  - ако имам по-малко от 10 лв ще отида на кафе
    * Покажете резултата като съобщение в конзолата.
*/

$health = readline('Are you sick (Yes/No or Y/N)');
$money = 0;
$medicament = 0;
$cinema = 0;
$coffee = 0;
$goOut = 1;
$tea = 0;
if ($health == 'Yes' || $health == 'Y' || $health == 'y') {
    $health = 0;
} else if ($health == 'No' || $health == 'N' || $health == 'n') {
    $health = 1;
}
if (!$health){
    echo 'I\'m sick and i will stay home';
    if ($money > 0){
        $medicament +=1;
        $health +=1;
        echo ', will go out only to buy some medicament';
    } else {
        $tea +=1;
        $health +=1;
        echo ', I\'ll make some tea';
    }
} else {
    if ($money > 10){
        $cinema +=1;
        echo 'I\'ll go to the cinema with friends';
    } else {
        $coffee +=1;
        echo 'I\'ll go to the coffee with friends';
    }
}