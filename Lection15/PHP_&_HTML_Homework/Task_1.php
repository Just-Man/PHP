<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 08.01.16
 * Time: 08:56
 */
/*
Задача 1:
Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе 2 числа и
да избере от лист каква операция иска да изпълни. След това изведете резултата от
неговия избор и въведени стойности. Възможни операции нека да бъдат +, - , *, /.
Направете всички възможни проверки за въведените стойности
*/
require_once "My_library.php";

$first = getValue($_POST, 'firstNumber');
$second = getValue($_POST, 'secondNumber');
$sing = getValue($_POST,'mathSing');
$validationErrors = [];

function calc () {
    global $first, $second, $sing, $validationErrors;

    if (!validateRequired($first)){
       $validationErrors['firstNumber'][] = 'Field is required';
    } else if (preg_match('/[^0-9]/i', $first)) {
        $validationErrors['firstNumber'][] = 'wrong input value, value must by number';
    };

    if (!validateRequired($second)){
       $validationErrors['secondNumber'][] = 'Field is required';
    } else if (preg_match('/[^0-9]/i', $second)) {
        $validationErrors['secondNumber'][] = 'wrong input value, value must by number';
    };

    if (!validateRequired($sing)){
       $validationErrors['mathSing'][] = 'Field is required';
    };

    switch ($sing) {
        case 1:
            $result = $first + $second;
            $sing = '+';
            break;
        case 2:
            $result = $first - $second;
            $sing = '-';
            break;
        case 3:
            $result = $first / $second;
            $sing = '/';
            break;
        case 4:
            $result = $first * $second;
            $sing = '*';
            break;
        default: $result = null;
    }
    return array($result, $sing);
}
$print = null;
if (!empty($_POST)) {
    $results = calc();
    $errors = empty($validationErrors);
    if ($errors) {
        $print = $first . ' ' . $results[1] . ' ' . $second . ' = ' . $results[0];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Task 1</title>
    </head>
    <body>
        <form name="reg" action="" method="post">
            <span class="<?= getFieldClass($validationErrors, 'firstNumber')?>">
                <label for="number1">First number</label>
                <input id="number1" name="firstNumber" type="text" value="<?= htmlentities($first)?>">
				<?= displayErrors($validationErrors, 'firstNumber')?>
            </span>
            <span class="<?= getFieldClass($validationErrors, 'secondNumber')?>">
                <label for="number2">Second number</label>
                <input id="number2" name="secondNumber" type="text" value="<?= htmlentities($second)?>">
				<?= displayErrors($validationErrors, 'secondNumber')?>
            </span>
            <span class="<?= getFieldClass($validationErrors, 'mathSing')?>">
                <label for="sing">Select sing</label><select id="sing" name="mathSing">
                    <option value="">Select</option>
                    <option value="1">+</option>
                    <option value="2">-</option>
                    <option value="3">/</option>
                    <option value="4">*</option>
                </select>
				<?= displayErrors($validationErrors, 'mathSing')?>
            </span>

            <span><button type="submit">Calc</button> </span>
        </form>
    <p><?= $print ?></p>
    </body>
</html>
