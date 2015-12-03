<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 19.11.15
 * Time: 06:18
 */

function checkNum($userNum, $newNum){
    $arr['bull'] = 0;
    $arr['cow'] = 0;
    for($i = 0; $i <4; $i++){
        if ($newNum[$i] == $userNum[$i]){
            $arr['bull']++;
        } else if (strpos($userNum, $newNum[$i])!==false){
            $arr['cow']++;
        }
    }
    return $arr;
}
$firstUser = readline('Играч 1 въведи число: ');
echo str_repeat(PHP_EOL, 30);
$secondUser = readline('Играч 2 въведи число: ');
echo str_repeat(PHP_EOL, 30);

while(true){
    echo str_repeat('-', 30) , PHP_EOL , '---------- Играч 1: ----------', PHP_EOL;
    $firstNum = readline('Въведи предполагаемо число:');
    $arr = checkNum($secondUser, $firstNum);
    echo 'Бикове:', $arr['bull'], PHP_EOL, 'Крави:', $arr['cow'], PHP_EOL;
    if($arr['bull'] == 4){
        echo 'ПОБЕДИТЕЛ!';
        break;
    }
// Second gamer
    echo str_repeat('-', 30) , PHP_EOL , '---------- Играч 2: ----------', PHP_EOL;
    $secondNum = readline('Въведи предполагаемо число:');
    $arr = checkNum($firstUser, $secondNum);
    echo 'Бикове:', $arr['bull'], PHP_EOL, 'Крави:', $arr['cow'], PHP_EOL;
    if($arr['bull'] == 4){
        echo 'ПОБЕДИТЕЛ!';
        break;
    }
}