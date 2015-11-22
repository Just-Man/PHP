<?php

$a = [42.25, 45.25, 9.3, 16.8, 0, -38.4, 90.25, 0.8, 0, 1.25];
$b = [0.23, 67, 28, 22.68, -1.45, -0.39, 4.6, 1.8, 0, 92];
//$c = [42.25, 67, 28, 22.68, 0, -0.39, 90.25, 1.8, 92] 

$lenA = count($a);
$lenB = count($b);
$lenC = 0;
$c = [];

if ($lenA >= $lenB) {
	$lenC = $lenB;
} else if ($lenA <= $lenB) {
	$lenC = $lenA;
}

foreach ($a as $v) {
	echo $v, '  ';
}
echo PHP_EOL;

foreach ($b as $v) {
	echo $v, '  ';
}
echo PHP_EOL, PHP_EOL;

for ($i = 0; $i < $lenC; $i++) {
	if ($a[$i] >= $b[$i]) {
		$c[$i] = $a[$i];
	} else {
		$c[$i] = $b[$i];
	}
	echo $c[$i], '  ';
}
	
