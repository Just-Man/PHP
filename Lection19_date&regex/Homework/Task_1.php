<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 12.02.16
 * Time: 06:50
 */

/*
 *Task 1. Направете уеб форма с 3 полета за месец, ден и година,
 *след събмит на формата над нея да излиза надпис дали
 *въведените данни са валидна дата.
 */

require_once '../../My_library.php';

$errors = [];

$year = getValue($_POST, 'year');
$month = getValue($_POST, 'month');
$day = getValue($_POST, 'day');

$monthDays = 'You must enter Month';

switch ($month) {
    case '2' :
        $monthDays = 28;
        break;
    case '4' :
    case '6' :
    case '9' :
    case '11' :
        $monthDays = 30;
        break;
    case '1' :
    case '3' :
    case '5' :
    case '7' :
    case '8' :
    case '10' :
    case '12' :
        $monthDays = 31;
        break;
}

if (!($year % 4) || !($year % 4) && ($year % 100)) {
    if ($month === '2') {
        $monthDays = 29;
    }
}

if ($_POST) {
    if ($day > $monthDays) {
        $errors['day'][] = "Month $month has only $monthDays day";
    }

    if ($day < 1) {
        $errors['day'][] = 'You must enter number greater than 1';
    }

    if ($month < 1) {
        $errors['month'][] = 'You must enter number greater than 1';
    }

    if ($month > 12) {
        $errors['month'][] = 'Year has only 12 months';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Date & time</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>
    <p <?php if ($errors) : ?>class="errors" <?php endif; ?>><?php if ($errors) : ?>Entered date is not valid<?php endif; ?></p>
    <form id="checkDate" action="" method="post" class="form-group">
        <label for="day">Day</label>
        <input id="day" type="number" name="day" class="form-control" value="<?= $day ?>">
        <?= displayErrors($errors, 'day') ?>
        <label for="month">month</label>
        <input id="month" type="number" name="month" class="form-control" value="<?= $month ?>">
        <?= displayErrors($errors, 'month') ?>
        <label for="year">year</label>
        <input id="year" type="number" name="year" class="form-control" value="<?= $year ?>">
        <?= displayErrors($errors, 'year') ?>
        <button type="submit" class="btn-default btn btn-lg">Check</button>
    </form>
</main>
</body>
</html>