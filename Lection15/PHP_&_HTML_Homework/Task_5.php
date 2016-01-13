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
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task 5</title>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <form action="" name="form_get" class="getPost">
            <label for="name">Name</label>
            <input type="text" id="name">
            <label for="age">Age</label>
            <input type="text" id="age">
        </form>
        <form action="" method="post" name="form_post" class="getPost">

        </form>
