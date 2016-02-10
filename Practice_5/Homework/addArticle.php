<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 04.02.16
 * Time: 09:21
 */

require_once __DIR__ . "/config.php";

\HttpStub\Settings::set(\HttpStub\Settings::PATH, __DIR__ . "/.data");

$articles = new \HttpStub\Storage\FileStorage('articles');

$article = $articles->readAll();

$categories = new \HttpStub\Storage\FileStorage('category');


require_once 'views/header.php';
require_once __DIR__ . "/views/" . PHP_SELF;