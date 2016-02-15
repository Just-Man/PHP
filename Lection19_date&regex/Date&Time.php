<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 29.01.16
 * Time: 13:57
 */

//var_dump(getdate());

var_dump(date('Y-F-d H:i:s'));
var_dump(mktime(9, 05, 1945));

$date = new DateTime();
print_r($date);