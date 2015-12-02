<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 24.11.15
 * Time: 09:27
 */

$stack = [];

function pop () {
    global $stack;
    return array_pop($stack);
}

function push ($entry) {
    global $stack;
    return array_push($stack, $entry);
}

foreach (['clubs','diamonds','hearts','spades'] as $color) {
    foreach (array_merge(range(2, 10), ['J','D','K','A']) as $value) {
        push(
            [
                'Color' => $color,
                'Value' => $value
            ]
        );
    }


}

shuffle($stack);

$cardToGive = 12;

while ($cardToGive -= 1) {
    pop();
}
$trump = pop();

print_r($trump);