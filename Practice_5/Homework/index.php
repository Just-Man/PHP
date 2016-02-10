<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 04.02.16
 * Time: 09:21
 */

require_once 'config.php';


\HttpStub\Settings::set(\HttpStub\Settings::PATH, __DIR__ . "/.data");

require_once 'views/header.php';
require_once __DIR__ . "/views/" . PHP_SELF;