<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 08:46
 */

require_once 'classes/autoload.php';

$simple = new SimpleNote(10);
//
print_r($simple);
//
$simple->writeInPage([2, 'Test', 'Some text']);
//
$all = $simple->showAllPage();


$secure = new SecretNote(5, '1234');

$_GET['pass'] = '1234';

$secure->__call('writeInPage', [3, 'dfdsfsdf', 'tdfr']);

$_GET['pass'] = '123';
print_r($secure->__call('showPage', 3));

$_GET['pass'] = '1234';
print_r($secure->__call('showAllPage'));

