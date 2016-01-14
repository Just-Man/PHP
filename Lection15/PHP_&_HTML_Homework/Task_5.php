<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 13.01.16
 * Time: 18:08
 */
/*
Задача 5:
Създайте HTML страница с PHP скрипт, в който изписва всички REQUEST
параметри (POST и GET ). Да изписва техните имена и стойности, както и да показва от
какъв тип са тези параметри (int, string, ...).
*/

ini_set('error_reporting', E_ALL | E_STRICT);
ini_set('display_errors', 'On');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Task 5</title>
    </head>
    <body>
        <form name="reg" action="" method="get">
            <div><label for="f_name">First Name</label><input id="f_name" name="first_name" type="text"></div>
            <div><label for="l_name">Last Name</label><input id="l_name" name="last_name" type="text"></div>
            <div><label for="user_name">User name</label><input id="user_name" name="user_name" type="text"></div>
            <div><label for="pass">Password</label><input id="pass" name="pass" type="password"></div>
            <div><label for="send"><button id="send" type="submit">Send</button></label></div>
        </form>
    <table>
        <tr><td>Variables</td><td>Type of variables</td></tr>
        <?php
        foreach ($_REQUEST as $item) { ?>
            <tr><td><?= $item?></td><td>  <?=gettype(strval($item)) ?> </td></tr>
        <?php } ?>

    </table>
    </body>
</html>