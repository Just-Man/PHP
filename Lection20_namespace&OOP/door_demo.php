<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.02.16
 * Time: 15:54
 */

require_once 'class/autoload.php';

$door = new Door ('closed', 'locked');

echo $door->display();
