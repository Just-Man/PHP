<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 10.11.15
 * Time: 10:22
 */

$index = 'Подходяща стойност';

$charArray = [];

do {
    $input = readline('Enter number');
    if ($input !== '') {
        $charArray[] = $input;
    }
} while ($input !== '');

$search = readline('Enter search element');

foreach ($charArray as $rowKey => $row) {
    foreach ($charArray[$rowKey] as $col) {
        if($charArray[$row][$col] = $search) {
            $index = $col;
            break;
        }
    }

}
echo $index;
