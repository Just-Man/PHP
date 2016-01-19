<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 19.01.16
 * Time: 11:03
 */

function randColor () {
    $red = dechex(rand(0,255));
    $green = dechex(rand(0,255));
    $blue = dechex(rand(0,255));

    $color = '#' . $red . $green . $blue;
    return
        ['color' => $color];
}

$test = [randColor(), randColor(), randColor()];