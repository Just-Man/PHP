<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 13:31
 */

require_once 'autoload.php';

$SmartCourier = Company::check();

$deskVarna = new Employee('V1', 052123, 8010230102);

$transpVarna = new Employee('VTransp', 052124, 8010230101);

$varna = new Office('varna', $deskVarna, $transpVarna);

$SmartCourier->setOffices($varna);
$SmartCourier->setOffices($varna);
$SmartCourier->setOffices($varna);
$SmartCourier->setOffices($varna);

print_r($SmartCourier);