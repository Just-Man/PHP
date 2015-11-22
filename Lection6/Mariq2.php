<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 21.11.15
 * Time: 22:19
 */


$text = 'uchilishte uchenik';//readline('Enter 2 words: ');
$len = strlen($text);
echo $len;

if ($len < 10 || $len > 20 ) {
	echo 'Wrong length!' , PHP_EOL;
	exit;
}

$array = [];
$array2 = [];
$i = 0;
// for ($i = 0 ; $i < $len ; $i++ )


while ($text[$i] != ' ') {
	$array[] = $text[$i];
	$i++;
}

$lenArray = count($array);
print_r($array);

while ($i < $len -1) {
	$array2[] = $text[$i+1];
	$i++;
}

print_r($array2);