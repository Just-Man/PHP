<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.10.15
 * Time: 12:05
 */

$a = 2;
$b = 3;

var_dump($a & $b,
         $a | $b,
         $a ^ $b,
         ~ $a,
         ~ $b,
         $b << $a,
         $b >> $a
);