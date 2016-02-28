<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 08:46
 */

require_once 'classes/autoload.php';

//$simple = new SimpleNote(10);
//
//print_r($simple);
//
//$simple -> writeInPage(2, 'Test', 'Some text');
//
//$all = $simple -> showAllPage();

$_GET['pass'] = '123';

$secure = new SecretNote('123', 5);

//print_r($secure);

$secure->__call('writeInPage', [3, 'dfdsfsdf', 'tdfr']);

print_r($secure->__call('showPage', 3));

