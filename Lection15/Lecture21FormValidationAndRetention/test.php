<?php
require_once 'functions.php';

$number = '12345678אסהפ';

$array = [1, 2, 3, 4, 5];

// var object = {}
$object = new stdClass();

//foreach (null as $value)
//var_dump(validateNonAlphaNumeric($number));

$str = 'My Name is %s and I am %5.f years old %1$s';
echo sprintf($str, 'Ivan', '12as');