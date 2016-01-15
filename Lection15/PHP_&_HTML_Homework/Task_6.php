<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 14.01.16
 * Time: 06:01
 */
/*
Задача 6:
Създайте HTML страница с PHP скрипт, в който потребителя трябва да
въведе име, фамилия и да избере дата на раждане (ден, месец,
година). Ако потребителя не е въвел някое поле, нека въведената от
него стойност да се запази във формата.
*/

require_once "My_library.php";

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

$firstName = $_POST['first_name'];
$firstName = $_POST['last_name'];

$birth_year = $_POST['birthDay'];
$birth_mount = $_POST['birthDay'];
$birth_day = $_POST['birthDay'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Task 6</title>
</head>
<body>
<h1>Add Employee</h1>

<form action="" method="post">
    <div id="names">
        <span>
            <label for="first-name">First Name:</label>
            <input type="text" id="first_name" placeholder="John" name="first_name" value="<?= htmlentities("first_name") ?>">
            <label for="first-name">Last Name:</label>
            <input type="text" id="last_name" placeholder="John" name="last_name" value="<?= htmlentities("last_name") ?>" style="width:8em">
        </span>
    <div id="dates">
        <span>
            <label>Birth date:</label>
            <select name="birthMount">
                <option selected="selected"> Select </option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
            </select>

            <select name="birthDay" id="birthDays">
                <option selected="selected"> Select </option>
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

            <select name="birthYears" id="birthMount">
                <option selected="selected"> Select </option>

            </select>
        </span>
        <br>
    <div>
        <button type="submit">Add Employee</button>
    </div>
</form>
</body>
</html>