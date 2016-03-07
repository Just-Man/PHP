<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 14:21
 */

spl_autoload_register(function ($className) {
    require_once __DIR__ . '/classes/' . $className . '.php';
});