<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 11.01.16
 * Time: 10:04
 */

require_once '../../php_errors.php';

	require_once 'My_library.php';

	$validationErrors = [];
	$username = getValue($_POST, 'username');
	$password = getValue($_POST, 'password');
    $rePassword = getValue($_POST, 'rePassword');
    $print = '';

	function validateForm(&$errors) {
        global $username, $password, $rePassword;

        $errors = [];

        if (!validateRequired($username)) {
            $errors['username'][] = 'User Name is required';
        } else if(!validateLen($username, 4)) {
            $errors['username'][] = 'User Name must be at least 4 characters long';
        }

        if (!validateRequired($password)) {
            $errors['password'][] = 'Password is required';
        } else {

            if(!validateLen($password, 5)) {
                $errors['password'][] = 'Password must be at least 5 characters long';
            }

            if (!validateNonAlphaNumeric($password)) {
                $errors['password'][] = 'Password must contain at least 1 non alphanumeric character';
            }

            if ($password !== $rePassword) {
                $errors['rePassword'][] = 'Password not match';
            }
        }
        return empty($errors);
    }
	if (!empty($_POST)) {
        validateForm($validationErrors);
        if (validateForm($validationErrors)) {
            $password = md5($password);
            $print = 'Username is: ' . $username . '<br>' . 'Password is: ' . $password;
        }

    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Task 2</title>
    </head>
    <body>
        <div>
            <form action="" method="post">
                <span class="<?= getFieldClass($validationErrors, 'username')?>">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" value="<?= htmlentities($username)?>"/>
                    <?= displayErrors($validationErrors, 'username')?>
                </span>
                <span class="<?= getFieldClass($validationErrors, 'password')?>">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                    <?= displayErrors($validationErrors, 'password')?>
                </span>
                <span class="<?= getFieldClass($validationErrors, 'password')?>">
                    <label for="rePassword">Re Password</label>
                    <input type="password" name="rePassword" id="rePassword" />
                    <?= displayErrors($validationErrors, 'rePassword')?>
                </span>
                <span>
                    <button type="submit">Register</button>
                </span>
            </form>
            <p><?= $print ?></p>
        </div>
    </body>
</html>