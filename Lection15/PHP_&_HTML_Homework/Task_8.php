<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 15.01.16
 * Time: 08:09
 */
/*
Задача 8:
Създайте HTML страница с PHP скрипт, в който съдържа HTML форма и
показва на екрана колко пъти тази форма е била изпратена на
сървъра
*/
session_start();

require_once "My_library.php";

define('y1',1);
define('y2',2);
define('y3',3);
define('y4',4);
define('y5',5);
define('y6',6);
define('y7',7);
define('y8',8);
define('y9',9);
define('y10',10);

define('JANUARY',1);
define('FEBRUARY',2);
define('MARCH',3);
define('APRIL',4);

define('d1',1);
define('d2',2);
define('d3',3);
define('d4',4);
define('d5',5);
define('d6',6);
define('d7',7);

$firstName = getValue($_POST,'first_name');
$lastName = getValue($_POST,'last_name');

$birth_year = getValue($_POST,'birthYear');
$birth_mount = getValue($_POST,'birthMount');
$birth_day = getValue($_POST,'birthDay');

$validationErrors = [];
function validateForm(&$errors)
{
    global $firstName, $lastName, $birth_day, $birth_mount, $birth_year;

    $errors = [];

    if (!validateRequired($firstName)) {
        $errors['first_name'][] = 'First Name is required';
    } else if (!validateLen($firstName, 2)) {
        $errors['first_name'][] = 'First Name must be at least 2 characters long';
    }

    if (!validateRequired($lastName)) {
        $errors['last_name'][] = 'Last Name is required';
    } else if (!validateLen($lastName, 2)) {
        $errors['last_name'][] = 'Last Name must be at least 2 characters long';
    }
    if (!validateRequired($birth_day)) {
        $errors['birthDay'][] = 'Form Of Address is required';
    }
    if (!validateRequired($birth_mount)) {
        $errors['birthMount'][] = 'Form Of Address is required';
    }
    if (!validateRequired($birth_year)) {
        $errors['birthYear'][] = 'Form Of Address is required';
    }

    return empty($errors);
}
function counter() {
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } else {
        $_SESSION['counter'] += 1;
    }
    return $_SESSION['counter'];
}

if (!empty($_POST)) {
    validateForm($validationErrors);
    $result = 'Number of submit is: ' . counter();
} else {
    $result = '';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Task 8</title>
</head>
<body>

<form action="" method="post">
        <span class="<?= getFieldClass($validationErrors, 'first_name')?>">
            <label for="first-name">First Name:</label>
            <input type="text" id="first_name" placeholder="John" name="first_name" value="<?= htmlentities("$firstName") ?>">
            <?= displayErrors($validationErrors, 'first_name')?>
        </span>
        <span class="<?= getFieldClass($validationErrors, 'last_name')?>">
            <label for="first-name">Last Name:</label>
            <input type="text" id="last_name" placeholder="John" name="last_name" value="<?= htmlentities("$lastName") ?>" ">
            <?= displayErrors($validationErrors, 'last_name')?>
        </span>
    <span class="select">
            <label>Birth date:</label>
        <span class="<?= getFieldClass($validationErrors, 'birthMount')?>">
            <select name="birthMount">
                <option value=""> Select </option>
                <?= options([
                    JANUARY => 'JANUARY',
                    FEBRUARY => 'FEBRUARY',
                    MARCH => 'MARCH',
                    APRIL => 'APRIL'
                ], $birth_mount) ?>
            </select>
        </span>
        <span class="<?= getFieldClass($validationErrors, 'birthDay')?>">
            <select name="birthDay" id="birthDays">
                <option value=""> Select </option>
                <?= options([
                    d1 => '1',
                    d2 => '2',
                    d3 => '3',
                    d4 => '4',
                    d5 => '5',
                    d6 => '6',
                    d7 => '7',
                ], $birth_day) ?>
            </select>
        </span>
        <span class="<?= getFieldClass($validationErrors, 'birthYear')?>">
            <select name="birthYear" id="">
                <option  value=""> Select </option>
                <?= options([
                    y1 => '1909',
                    y2 => '1908',
                    y3 => '1907',
                    y4 => '1906',
                    y5 => '1905',
                    y6 => '1904',
                    y7 => '1903',
                    y8 => '1902',
                    y9 => '1901',
                    y10 => '1900'
                ], $birth_year) ?>
            </select>
        </span>
    </span>
    <br>
    <span>
        <button type="submit">Add Employee</button>
    </span>
</form>

<p> <?= $result; ?></p>
</body>
</html>