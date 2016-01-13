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
foreach ($_POST as $item) {
    $digits[] = $item;
}
$digits = implode(',',$digits);
//$digits = getValue($_POST, 'numbers');
$numbers = numberFromString($digits)[0];
sort($numbers);
$len = count($numbers) - 1;
$min = $numbers[0];
$max = $numbers[$len];
$numbers = implode(", ",$numbers);

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
                <label for="number1">Number1</label>
                <input type="text" id="number1" name="number1">
            </span>
            <span>
                <label for="number2">Number2</label>
                <input type="text" id="number2" name="number2">
            </span>
            <span>
                <label for="number3">Number3</label>
                <input type="text" id="number3" name="number3">
            </span>
            <span>
                <label for="number4">Number4</label>
                <input type="text" id="number4" name="number4">
            </span>
            <span>
                <label for="number5">Number5</label>
                <input type="text" id="number5" name="number5">
            </span>
            <span>
                <label for="number6">Number6</label>
                <input type="text" id="number6" name="number6">
            </span>
            <span>
                <label for="number7">Number7</label>
                <input type="text" id="number7" name="number7">
            </span>
            <span>
                <label for="number8">Number8</label>
                <input type="text" id="number8" name="number8">
            </span>
            <span>
                <label for="number9">Number9</label>
                <input type="text" id="number9" name="number9">
            </span>
            <span>
                <label for="number10">Number10</label>
                <input type="text" id="number10" name="number10">
            </span>
    <button type="submit">Enter</button>
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
