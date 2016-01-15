<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 12.01.16
 * Time: 15:20
 */
/*
Задача 3:
Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе стойност
в градуси Celsius C и на трябва да получи градуси Fahrenheit F.
Използвайте формулата C = ( 5 / 9 ) * (F -32). След това доразширете задачата, като
добавите лист, от който потребителя да сам да избере дали да конвертира от C към F
или от F към C
*/

require_once "My_library.php";

$temp = getValue($_POST, 'temp');
$scale_from = getValue($_POST, 'scale_from');
$scale_to = getValue($_POST, 'scale_to');

if ($scale_from === $scale_to) {
    $result = $temp . ' '. $scale_from;
} else if ($scale_from == 'C') {
    $result = (( 9 / 5 ) * $temp ) + 32 . ' ' . $scale_to;
} else {
    $result = ( 5 / 9 ) * ( $temp - 32 ) . ' ' . $scale_to;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task 3</title>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <form action="" method="post" id="calc_temp">
            <span>
                <label for="temp">Temp.</label>
                    <input type="text" id="temp" name="temp">
            </span>
            <span>
                <label for="C_F_from">from</label>
                <select id="C_F_from" name="scale_from">
                    <option value="C" name="scale">°C</option>
                    <option value="F" name="scale">°F</option>
                </select>
            </span>
            <span>
                <label for="C_F_to">to</label>
                <select id="C_F_to" name="scale_to">
                    <option value="C" name="scale">°C</option>
                    <option value="F" name="scale">°F</option>
                </select>
            </span>
            <button type="submit">Calc.</button>
            <p id="result">
                Temperature in <?= $scale_to?> is: <?= $result ?>
            </p>
        </form>
    </body>
</html>
