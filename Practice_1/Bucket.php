<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 10:20
 */


//Task 1: Bucket numbers

$area = 0;
$height = readline('Enter height [m]');
$length = readline('Enter length [m]');
$numberBucket = 0;
$numberBucket = ceil($height * $length / 5);
echo 'Number of Bucket is: ' . $numberBucket;
