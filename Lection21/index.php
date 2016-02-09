<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.02.16
 * Time: 14:06
 */

require_once 'class/autoload.php';

$rectangle = new Rectangle(200, 100, 'img/color_label_rectagle_red_T.png');
echo $rectangle->display();

$rectangle->resize(200, 100);
echo $rectangle->display();


$square = new Square(100, 'img/square.png');
echo $square->display();

$square->resize(50);
echo $square->display();

$test = clone $square;