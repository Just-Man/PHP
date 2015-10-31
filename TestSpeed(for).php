<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 12:30
 */

    $start = microtime();

    for($i = 0; $i < 100000; $i++)
    {

    }

    $end = microtime();

    echo 'First complete in: ' . ($end - $start) , PHP_EOL;

    $start = microtime();

    for($i = 0; $i < 100000; ++$i)
    {

    }

    $end = microtime();

    echo 'Second complete in: ' . ($end - $start) , PHP_EOL;

    $start = microtime();

    for($i = 0; $i < 100000; $i = $i +1) {
    }

    $end = microtime();

    echo 'Third complete in: ' . ($end - $start) , PHP_EOL;

 $start = microtime();

    for($i = 0; $i < 100000; $i += 1){
    }

    $end = microtime();

    echo 'four complete in: ' . ($end - $start) , PHP_EOL;