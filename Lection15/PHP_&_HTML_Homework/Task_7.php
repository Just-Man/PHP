<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 15.01.16
 * Time: 07:19
 */
/*
Задача 7:
Създайте HTML страница с PHP скрипт, в който изписва информация за
browser-a, с който е отворен този скрипт. Нека след това да се изпише
информация за сървъра и за host-a. Коя системна променлива ще
използвате, за да извлечете тези информация?
*/

$browser = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];
$host = $_SERVER['HTTP_HOST'];


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="reset.css">
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Task 7</title>
    </head>
    <body>
    <div>
        <h1>Browser</h1>
    Browser is: <?= $browser ?>
    </div>
    <div>
        <h1>Server</h1>
    Server is: <?= $server ?>
    </div>
    <div>
        <h1>Host</h1>
    Host is: <?= $host ?>
    </div>
    </body>
</html>