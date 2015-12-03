<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.12.15
 * Time: 09:03
 */

$matrix = [
            [' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',],
            [' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',],
            [' ',' ',' ',' ',' ',' ','#','#','#','#',],
            [' ',' ',' ',' ',' ',' ','#',' ',' ',' ',],
            [' ',' ',' ',' ',' ',' ','#',' ',' ',' ',],
            [' ',' ',' ',' ',' ','x','#',' ',' ',' ',],
            [' ',' ',' ',' ',' ',' ','#','#','#','#',],
            [' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',],
            [' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',],
            [' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',]
         ];

$bombRow = 5;
$bombCol = 4;
$gasSing = 'O';
$wallSing = '#';

function gas($row, $col){
    global $matrix, $gasSing;
    $matrix[$row][$col] = $gasSing;

    if (checkCell($row,$col + 1)) {
        gas($row,$col + 1);
    }
    if (checkCell($row + 1,$col)) {
        gas($row + 1,$col);
    }
    if (checkCell($row,$col - 1)) {
        gas($row,$col - 1);
    }
    if (checkCell($row - 1,$col)) {
        gas($row - 1,$col);
    }
}

function checkCell ($row, $col){
    global $matrix, $gasSing, $bombRow, $bombCol, $wallSing;

    if (!isset($matrix[$row][$col])) {return false;}

    if ($row == $bombRow && $col == $bombCol) {return false;}

    if ($matrix[$row][$col] == $gasSing) {return false;}

    if ($matrix[$row][$col] == $wallSing) {return false;}

    return true;
}

function showMatrix ($matrix) {
    echo str_repeat('|', count($matrix) + 2);
    foreach ($matrix as $row) {
        echo $row;

    }


}