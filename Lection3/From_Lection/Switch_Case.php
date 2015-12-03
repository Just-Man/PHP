<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 27.10.15
 * Time: 09:29
 */

// day of week
//Using If else statement

$day = readline('Enter day of week'. PHP_EOL);

if ($day == 1) {
    echo 'Monday';
} else if ($day == 2) {
    echo 'Tuesday';
} else if ($day == 3) {
    echo 'Wednesday';
} else if ($day == 4) {
    echo 'Thursday';
} else if ($day == 5) {
    echo 'Friday';
} else if ($day == 6) {
    echo 'Saturday';
} else if ($day == 6) {
    echo 'Sunday';
} else {
    echo 'Enter digit between 1 and 7';
}


// day of week
//Using switch case statement

switch ($day) {
    case 1: echo 'Monday' . PHP_EOL;
        break;
    case 2: echo 'Tuesday' . PHP_EOL;
        break;
    case 3: echo 'Wednesday' . PHP_EOL;
        break;
    case 4: echo 'Thursday' . PHP_EOL;
        break;
    case 5: echo 'Friday' . PHP_EOL;
        break;
    case 6: echo 'Saturday' . PHP_EOL;
        break;
    case 7: echo 'Sunday' . PHP_EOL;
        break;
    default: echo 'Enter digit between 1 and 7' . PHP_EOL;
}


switch ($day) {
    case 1:
    case 2:
        echo 'The day is in the beginning of the week';
        break;
    case 3:
    case 4:
        echo 'The day is in the middle of the week';
        break;
    case 5:
    case 6:
    case 7:
        echo 'The day is in the end of the week';
        break;
    default: echo 'We don\'t know where in the week is the day ';
}