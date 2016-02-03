<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.02.16
 * Time: 16:00
 */

require_once 'class/autoload.php';

function __autoload($className)
{

}

$person = new Person;

$person->setFName('peter');
$person->setLName('pan');

echo sprintf('Hi my name is %s %s',
    $person->getFName(),
    $person->getLName()), PHP_EOL;

$person2 = new Person;

$person2->setFName('Captain');
$person2->setLName('Hook');

echo sprintf('Hi my name is %s %s',
    $person2->getFName(),
    $person2->getLName()), PHP_EOL;

echo $person->getInfo() . PHP_EOL . $person2->getInfo();

$vehicle = new Vehicle();
$vehicle->setDescription('test');

