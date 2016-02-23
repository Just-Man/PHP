<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.02.16
 * Time: 16:09
 */

spl_autoload_register(function ($className) {
    require_once __DIR__ . '/' . $className . '.php';
});