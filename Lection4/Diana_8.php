<?php
/* ������ 8: �������� ��������, ����� ������ � ������� ���-������� ������ �� ������� ������� �������� � ����� �����.
 * �������� ���������� �� ������: 2,1,1,2,3,3,2,2,2,1          
 * ������������ ������ �: 2 2 2
 */

$array = [];
do {
	$input = readline('Enter number');
	if ($input !== '') {
		$array[] = $input;
	}
} while ($input !== '');

//$array = [2,1,1,2,3,3,2,2,2,1];

$xOld = '';
$xMax = 0;
$n = 1;
$nMax = 0;
$array[] = ' ';
foreach ($array as $x) {
	if ($x == $xOld) {
		$n++;
	} else {
		if ($n > $nMax) {
			$nMax = $n;
			$xMax = $xOld;
		}
		$n = 1;
	}
	$xOld = $x;
}

for ($i = 1; $i <= $nMax; $i++) {
	echo $xMax, ' ';
}

