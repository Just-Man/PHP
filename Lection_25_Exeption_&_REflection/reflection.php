<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 19.02.16
 * Time: 14:58
 */
require_once 'Guy.php';

$reflectionClass = new ReflectionClass('Guy');

var_dump($reflectionClass->getMethods());