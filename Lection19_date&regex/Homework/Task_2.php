<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 12.02.16
 * Time: 10:06
 */

/*2. Направете уеб форма вкоято да има 2 секции с по 6
текстови полета за
1. години
2. месеци
3. дни
4. часове
5. минути
6. секунди
В полетата в първата секция ще се задават елементите на дата
и време, a във втората числови стойности, които ще бъдат
прибавяни към всяко едно от полетата в първата секция.
Да се добавят още 2 полета във формата. В първото трябва да
се записва формата на дата, в която във второто поле да се
изписва резултата от сбора на датата в първите 6 полета със
стойностите във втората.
Когато формата се събмитне , към първите 6 полета се добавят
стийностите кореспондиращи им във втората секция.
Получената дата се визуализира в поле 14 във формат записан
в поле 13.*/

require_once 'My_library.php';

$year = getValue($_POST, 'year', 0);
$month = getValue($_POST, 'month', 0);
$day = getValue($_POST, 'day', 0);
$hour = getValue($_POST, 'hour', 0);
$minutes = getValue($_POST, 'minutes', 0);
$seconds = getValue($_POST, 'seconds', 0);

$format = 'd.m.Y H:i:s';

$interval_year = getValue($_POST, 'interval_year', 0);
$interval_month = getValue($_POST, 'interval_month', 0);
$interval_day = getValue($_POST, 'interval_day', 0);
$interval_hour = getValue($_POST, 'interval_hour', 0);
$interval_minutes = getValue($_POST, 'interval_minutes', 0);
$interval_seconds = getValue($_POST, 'interval_seconds', 0);

$errors = [];
$monthDays = null;
$newDate = null;

if (!empty($_POST)) {

    $date = new DateTime("$year-$month-$day $hour:$minutes:$seconds");

    $monthDays = $date->format('t');

    $format = getValue($_POST, 'format');

    if ($day > $monthDays) {
        $errors['day'][] = "Month $month has only $monthDays day";
    }

    if ($month > 12) {
        $errors['month'][] = 'Year has only 12 months';
    }

    $dateInterval = new DateInterval('P' . $interval_year . 'Y' . $interval_month .
        'M' . $interval_day . 'DT' . $interval_hour . 'H' . $interval_minutes . $interval_seconds . 'S');

    $newDate = $date->add($dateInterval);
    $newDate = $newDate->format($format);
}
$submit = true;
if ($errors) {
    $submit = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Task 2</title>

</head>
<body class="container-fluid">
<main class="panel">
    <form class="form-horizontal" method="post">
        <fieldset>
            <legend>Add date & time</legend>
            <label class="form-group" for="year">Year</label>
            <input type="number" class="form-control input-lg" value="<?= $year ?>" name="year" id="year">
            <?= displayErrors($errors, 'year') ?>
            <label class="form-group" for="month">Month</label>
            <input type="number" class="form-control input-lg" value="<?= $month ?>" name="month" id="month">
            <?= displayErrors($errors, 'month') ?>
            <label class="form-group" for="day">Day</label>
            <input type="number" class="form-control input-lg" value="<?= $day ?>" name="day" id="day">
            <?= displayErrors($errors, 'day') ?>
            <label class="form-group" for="hour">Hour</label>
            <input type="number" class="form-control input-lg" value="<?= $hour ?>" name="hour" id="hour">
            <?= displayErrors($errors, 'hour') ?>
            <label class="form-group" for="minutes">Minutes</label>
            <input type="number" class="form-control input-lg" value="<?= $minutes ?>" name="minutes" id="minutes">
            <?= displayErrors($errors, 'minutes') ?>
            <label class="form-group" for="seconds">Second</label>
            <input type="number" class="form-control input-lg" value="<?= $seconds ?>" name="seconds" id="seconds">
            <?= displayErrors($errors, 'seconds') ?>
        </fieldset>
        <fieldset>
            <legend>Add date & time Interval</legend>
            <label class="form-group" for="interval_year">Interval year</label>
            <input type="number" class="form-control input-lg" value="<?= $interval_year ? $interval_year : 0 ?>"
                   name="interval_year" id="interval_year">
            <label class="form-group" for="interval_month">Interval month</label>
            <input type="number" class="form-control input-lg" value="<?= $interval_month ? $interval_month : 0 ?>"
                   name="interval_month" id="interval_month">
            <label class="form-group" for="interval_day">Interval day</label>
            <input type="number" class="form-control input-lg" value="<?= $interval_day ? $interval_day : 0 ?>"
                   name="interval_day" id="interval_day">
            <label class="form-group" for="interval_hour">Interval hour</label>
            <input type="number" class="form-control input-lg" value="<?= $interval_hour ? $interval_hour : 0 ?>"
                   name="interval_hour" id="interval_hour">
            <label class="form-group" for="interval_minutes">Interval minutes</label>
            <input type="number" class="form-control input-lg" value="<?= $interval_minutes ?>" name="interval_minutes"
                   id="interval_minutes">
            <label class="form-group" for="interval_seconds">Interval seconds</label>
            <input type="number" class="form-control input-lg" value="<?= $interval_seconds ?>" name="interval_seconds"
                   id="interval_seconds">
        </fieldset>
        <fieldset id="formatField">
            <label class="form-group" for="format">Enter format for date</label>
            <input type="text" id="format" name="format" class="form-control input-lg" value="<?= $format ?>">
            <button type="submit" class="btn-lg btn btn-default">Send</button>
        </fieldset>
    </form>
    <fieldset id="formatField">
        <label class="form-group" dafor="format">Result date</label>
        <input type="text" id="format" class="form-control input-lg" value="<?= $newDate ?>">
    </fieldset>
</main>
</body>
</html>