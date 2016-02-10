<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 04.02.16
 * Time: 09:21
 */

define('PHP_SELF', basename($_SERVER['PHP_SELF']));

define('DATA_PATH', __DIR__, '/.data');
if (!is_dir(DATA_PATH)) {
    @mkdir(DATA_PATH);
}

require_once __DIR__ . "/vendor/autoload.php";
require_once 'My_library.php';

\HttpStub\Settings::set(\HttpStub\Settings::PATH, DATA_PATH);


/*
define('QUERY_STRING', $_SERVER['QUERY_STRING']);
preg_match_all("!(.*?)\&!", QUERY_STRING, $matches);

function isPageExist ($page, $defPage = 'index.php')
{
    if (!isset($page[1][0])) {
        return $defPage;
    } else {
       return $page[1][0] . '.php';
    }
}

define('PAGE_EXIST', isPageExist($matches));*/
