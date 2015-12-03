<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 27.10.15
 * Time: 09:56
 */

/*$counter = 1;
while ($counter <= 20) {
    echo 'Counter is: ' . $counter . PHP_EOL;
    $counter++;
}*/

$apples = 20;
while ($apples > 0) {
    $applesToEat = readline('Enter how many apples you won to eat' . PHP_EOL);
    if ($applesToEat > 0) {
        $apples -= $applesToEat;
    }
    echo 'You still have: ' , $apples , ' apples' , PHP_EOL;
}
echo 'Your apples are over';