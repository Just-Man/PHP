<?php
/* ������ 15: �� �� ������� ��������, ����� ������� � ��������� ����� ������ �����.
���� �����: �������� ������� ����� 3 �������� �����, ����� ��������� �������� ������� ������������ ���� ����.
������: 7.13; 0.2; 4.9; 5.1; 6.34; 1.12
�����: 5.1; 6.34; 7.13
 */


do {
	$num = readline('Enter number');
	if ($num !== '') {
		$array[] = $num;
	}		
} while ($num !== '');

$newArray = [];
$numMax = 0; 
$indexMax = 0;

while (count($newArray) < 3){
	$numMax = 0;
	$indexMax = 0;
	foreach($array as $index => $num) {
		$num = abs($num);
		if ($num > $numMax){
			$numMax = $num;
			$indexMax = $index;
		}
	}
	if (count($newArray) == 0 || $numMax != $newArray[count($newArray)-1]) {
		$newArray[] = $numMax;
		echo $numMax, ' ';
	}
	unset($array[$indexMax]);
}
