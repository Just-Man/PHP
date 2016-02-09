<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.02.16
 * Time: 15:10
 */

require_once 'autoload.php';

$bucket = new Bucket(5, 2, 'test');

echo 'testing construktor', PHP_EOL;

assert($bucket->getMaxVolume() === 5);

assert($bucket->getCurrentVolume() === 2);

assert($bucket->getName() === 'test');