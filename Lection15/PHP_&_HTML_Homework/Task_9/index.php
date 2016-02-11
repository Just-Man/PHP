<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 15.01.16
 * Time: 11:20
 */

session_start();

require_once "../My_library.php";

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


$methods = ['$_GET', '$_POST'];
$method = null;
$printMethod = null;
$result = '';
$results = '';

$firstName = getValue($method,'first_name');
$lastName = getValue($method,'last_name');

$birth_year = getValue($method,'birthYear');
$birth_mount = getValue($method,'birthMount');
$birth_day = getValue($method,'birthDay');

$validationErrors = [];

function counter() {
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } else {
        $_SESSION['counter'] += 1;
    }
    return $_SESSION['counter'];
}

if (!empty($_POST)) {
    $printMethod = $methods[1];
    $method = $_POST;
    foreach ($method as $item) {
                $results .= '<tr><td>' . $item . '</td></tr>';
            }
    $result = 'Number of submit is: ' . counter();
} else if (!empty($_GET)) {
    $printMethod = $methods[0];
    $method = $_GET;
    foreach ($method as $item) {
                $results .= '<tr><td>' . $item . '</td></tr>';
            }
    $result = 'Number of submit is: ' . counter();
} else {
    $result = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../reset.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    <title>Task 9</title>
</head>
<body>
    <a href="get.php">GET method</a>
    <a href="post.php">POST method</a>
    <h1><?= $printMethod ?></h1>
    <table>
        <?= $results ?>
    </table>
    <h2><?= $result ?></h2>
</body>
</html>