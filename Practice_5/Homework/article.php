<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 09.02.16
 * Time: 13:31
 */

require_once __DIR__ . "/config.php";

\HttpStub\Settings::set(\HttpStub\Settings::PATH, __DIR__ . "/.data");

require_once 'views/header.php';
require_once __DIR__ . "/views/" . PHP_SELF;
require_once 'views/footer.php';
