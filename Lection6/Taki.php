<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 16.11.15
 * Time: 12:56
 */

$input = readline('Въведете две думи, разделени с интервал' . PHP_EOL);

$array = explode(" ", $input);
if (count($array) > 2) {
	echo 'Моля прочетете условието!';
}
else {
	if ((mb_strlen($array[0], 'UTF-8')) > (mb_strlen($array[1], 'UTF-8'))){
		echo 'Първата дума е по-дълга' . PHP_EOL;
		$shorter = mb_strlen($array[1], 'UTF-8');
	}
	else if ((mb_strlen($array[1], 'UTF-8')) > (mb_strlen($array[0], 'UTF-8'))){
		echo 'Втората дума е по-дълга' . PHP_EOL;
		$shorter = mb_strlen($array[0], 'UTF-8');
	}
	else  {
		echo 'Думите са с равна дължина' . PHP_EOL;
		$shorter = mb_strlen($array[0], 'UTF-8');
	}
}

echo 'Разлики по позиции:' . PHP_EOL;
for ($i = 0; $i < $shorter; $i++){
	var_dump($array[0]);
	var_dump($array[1]);
	if ($array[0]{$i} == $array[1]{$i}){
		continue;
	}
	else {
		echo $i . ' ' . $array[0]{$i} . ' - ' . $array[1]{$i} . PHP_EOL;
	}
}
var_dump($array[0]);
var_dump($array[1]);