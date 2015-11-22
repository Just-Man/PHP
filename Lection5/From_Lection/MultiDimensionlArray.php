<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.11.15
 * Time: 09:38
 */

$array = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
        ];
echo $array[0][2];

print_r($array);

// Delete elements from array\

unset($array[1][1]);

/*

//traversing with for loop

echo 'traversing with foreach loop';
$len = count($array);
for ($i = 0; $i < $len ; $i += 1) {
    $lenRow = count($array[$i]);
    for ($j = 0; $j < $lenRow ; $j += 1) {
        echo $array[$i][$j];
    }

}

*/
echo 'traversing with foreach loop' , PHP_EOL;
foreach ($array as $rowIndex => $row) {
    foreach ($row as $colIndex => $cow) {
        echo $cow;
    }


}

$persons = [
        [
            'FirstName' => 'Ivan',
            'SecondName' => 'Ivanov',
            'Age' => 50
        ],
        [
            'FirstName' => 'Peter',
            'SecondName' => 'Georgiev',
            'Age' => 25
        ],
        [
            'FirstName' => 'Georgi',
            'SecondName' => 'Petrov',
            'Age' => 70
        ]
          ];