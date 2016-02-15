<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.02.16
 * Time: 13:47
 */
require_once "product/functions/calc.php";
require_once "sum/funtions/calc.php";

$a = 5;
$b = 3;

echo \product\calc($a, $b), PHP_EOL;
echo \sum\calc($a, $b), PHP_EOL;