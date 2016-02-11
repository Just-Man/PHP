<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 13.01.16
 * Time: 07:13
 */

/*
Задача 4:
Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведете 10
числа. След това ги сложете в array,сортирайте ги и ги изпишете сортирани.Намерете
най-малкото и най-голямото число и ги изпишете
*/

require_once "My_library.php";
//785679185644

$digits = getValue($_POST, 'numbers');
if ($digits) {
    $numbers = numberFromString($digits)[0];
    sort($numbers);
    $len = count($numbers) - 1;
    $min = $numbers[0];
    $max = $numbers[$len];
    $numbers = implode(", ", $numbers);
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task 4</title>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <form action="" method="post">
            <span>
                <label for="numbers">Numbers</label>
                    <input type="text" id="numbers" name="numbers">
            </span>
            <span>
            <button type="submit">Enter</button>
            </span>
            <p id="result">
                <?php
                if (!empty($_POST)) {
                    if ($len < 9 || $len > 9) { ?>
                        You must enter exact 10 numbers'
                    <?php } else { ?>
                        Input array is: <?= $digits ?> <br>
                        Cleared and sorted array is: <?= $numbers ?> <br>
                        Min value is = <?= $min ?> <br>
                        Max value is = <?= $max ?> <br>
                    <?php }
                }?>
            </p>
        </form>
    </body>
</html>
