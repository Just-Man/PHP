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
require_once 'My_library.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<form action="" method="post">
			<div class="<?= getFieldClass($validationErrors, 'firstname')?>">
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" id="firstname" value="<?= htmlentities($firstName)?>"/>
				<?= displayErrors($validationErrors, 'firstname')?>
			</div>
			<div class="<?= getFieldClass($validationErrors, 'lastname')?>">
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname"  value="<?= htmlentities($lastName)?>"/>
				<?= displayErrors($validationErrors, 'lastname')?>
			</div>