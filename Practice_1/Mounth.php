<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 10:18
 */


// Mounth
$month = readline('Enter desire month');
switch ($month) {
    case '1' :
        $monthDays = 31;
        break;
    case '2' :
        $monthDays = 28;
        break;
    case '3' :
        $monthDays = 31;
        break;
    case '4' :
        $monthDays = 30;
        break;
    case '5' :
        $monthDays = 31;
        break;
    case '6' :
        $monthDays = 30;
        break;
    case '7' :
        $monthDays = 31;
        break;
    case '8' :
        $monthDays = 31;
        break;
    case '9' :
        $monthDays = 30;
        break;
    case '10' :
        $monthDays = 31;
        break;
    case '11' :
        $monthDays = 30;
        break;
    case '12' :
        $monthDays = 31;
        break;
}

echo $monthDays;
