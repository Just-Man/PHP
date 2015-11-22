<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.11.15
 * Time: 10:28
 */

$cars = [
    'ford' => 200,
    'ferrari' => 270,
    'WV' => 280,
    'Seat' => 240
];

foreach ($cars as $car => $speed) {
    echo $car . ' ' . $speed . 'km/h' , PHP_EOL;

}
