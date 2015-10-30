<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.10.15
 * Time: 10:19
 */


//Task 2:  Airplane

//Enter value
$startHour = readline('Enter time [h]');
$startMinute = readline('Enter time [min]');
$travelTime = readline('Enter travel time [min]');

//Body
$hour = 0;
$minute = 0;
//$travelHours = (int)($travelTime/60);
//$travelMinutes = $travelTime % 60;
//$endHour =
$min = (int)(($startHour * 60) + $startMinute);
$min += $travelTime;
$hour = (int) ($min / 60);
$minute = (int) ($min % 60);
if ($hour == 24)
    $hour = 0;

//Print
echo 'Arive time is: ' . $hour . ':' . $minute;
