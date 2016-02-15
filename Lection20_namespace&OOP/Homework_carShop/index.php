<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 14.02.16
 * Time: 14:34
 */

require_once 'classes/autoload.php';

$seatToledo = new Cars('Seat', 'Toledo', 'Bordo', 1000, 190, false);
$seatAlthea = new Cars('Seat', 'Althea', 'Grey', 15000, 230, false);

$georgi = new Persons('Georgi', 30, 7700, true, 1100);

//$georgi -> buyCar($seatToledo);

//$seatToledo -> changeColor('silver');

/*$seatToledo
    -> changeGearUp()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> changeGearUp()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> changeGearUp()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> changeGearUp()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> changeGearUp()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> accelerate()
    -> changeGearDown()
    -> changeGearDown()
    -> changeGearDown()
    -> changeGearDown()
    -> changeGearDown()
    -> changeGearDown();*/

//var_dump($seatToledo -> isMoreExpensive($seatAlthea));
//var_dump($georgi);
//$georgi -> sellCarForScrap();
//var_dump($georgi);

//$carShop = new CarShop($seatAlthea,$seatToledo);


//$carShop -> nextCar();
//$carShop -> nextCar();
$ivan = new Persons('ivan', 23, 0124, true, 20000);

//$carShop -> sellCar($ivan);

//var_dump($ivan);

//$carShop ->showAll();

//$carShop -> sellCar($georgi);

//$carShop ->showAll();

$georgi->setFriends($ivan);

var_dump($georgi);