<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.11.15
 * Time: 21:36
 */

$arr = [
		[15, 16, 8, 1],
		[2, 3, 4, 7],
		[9, 11, 19, 6]
];
$check = true;
while ($check){
	$check = false;
	$len = count($arr);
	for($i = 0; $i < $len; $i++){
		$len2 = count($arr[$i]);
		for ($j = 0; $j < $len2; $j++){
			if(isset($arr[$j][$i + 1]) && $arr[$j][$i] > $arr[$j][$i + 1]){
				$avar = $arr[$j][$i + 1];
				$arr[$j][$i + 1] = $arr[$j][$i];
				$arr[$j][$i] = $avar;
				$check = true;
			}
		}
		if(isset($arr[$i + 1][0]) && $arr[$i][$j - 1] > $arr[$i + 1][0]){
			$avar = $arr[$i + 1][0];
			$arr[$i + 1][0] = $arr[$i][$j - 1];
			$arr[$i][$j - 1] = $avar;
			$check = true;
		}
	}
}
foreach ($arr as $val){
	echo implode(', ', $val), PHP_EOL;
}