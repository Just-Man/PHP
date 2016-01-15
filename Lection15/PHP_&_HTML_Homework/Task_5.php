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
            <span><label for="f_name">First Name</label><input id="f_name" name="first_name" type="text"></span>
            <span><label for="l_name">Last Name</label><input id="l_name" name="last_name" type="text"></span>
            <span><label for="user_name">User name</label><input id="user_name" name="user_name" type="text"></span>
            <span><label for="pass">Password</label><input id="pass" name="pass" type="password"></span>
            <span><label for="send"><button id="send" type="submit">Send</button></label></span>
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