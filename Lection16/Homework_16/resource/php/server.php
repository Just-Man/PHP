<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.01.16
 * Time: 09:01
 */

require_once "My_library.php";

$people = require_once "DB.php";

$key = getValue($_REQUEST, 'key');
$counter = -1;
if ($key) {
    foreach($people as $value){
        $counter += 1;
		if($counter == $key){
			$wantedPerson = [$value];
			echo json_encode($wantedPerson);
		}
	}
} else {
	$newArray = [];
	foreach($people as $value){
		$value = [
			'username' => $value['username'],
			'pic' => $value['pic']
		];
		array_push($newArray, $value);
	}
	echo json_encode($newArray);
}
