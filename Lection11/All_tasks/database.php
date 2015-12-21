<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 15.12.15
 * Time: 15:12
 */

$username = 'admin';
$pass = 'Pr0ject1';
$database = 'project1';
$srv = 'localhost';

$connection = mysqli_connect($srv, $username, $pass);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    print 'Connected';
}

$db_found = mysqli_select_db($connection,$database);

if ($db_found) {

    print "Database Found";

}
else {

    print "Database NOT Found";

}