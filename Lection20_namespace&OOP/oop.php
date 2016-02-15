<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.02.16
 * Time: 16:00
 */

require_once 'class/autoload.php';
/*
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

$vehicle = new Vehicle('very nice');

//Clone reference
$a = $vehicle;
$b = $vehicle;

$i = [
$vehicle = new Vehicle('very nice'),
$vehicle = new Vehicle('very nice'),
$vehicle = new Vehicle('very nice'),
$vehicle = new Vehicle('very nice'),
$vehicle = new Vehicle('very nice')
    ];

foreach ($i as $item => $value) {
       echo $item -> getDescripton;
}*/

$bucket3l = new Bucket(3, 0, '3l');
$bucket5l = new Bucket(5, 5, '5l');

$bucket3l->transfer($bucket5l);
$bucket3l->emptyDrain();
$bucket3l->transfer($bucket5l);
$bucket5l->emptyDrain();
$bucket5l->fill();
$bucket3l->transfer($bucket5l);


var_dump($bucket5l, $bucket3l);
