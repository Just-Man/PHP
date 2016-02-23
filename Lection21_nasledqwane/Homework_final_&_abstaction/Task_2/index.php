<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.02.16
 * Time: 07:10
 */

require_once 'class/autoload.php';

$p1 = new Person('p1', 25, 1);
$p2 = new Person('p2', 30, 0);

$s1 = new Students('s1', 25, 1, 3.5);
$s2 = new Students('s2', 30, 0, 5.6);

$e1 = new Employee('tet', 19, 1, 60);
$e2 = new Employee('teta', 29, 0, 80);

$peoples = [$p1, $p2, $s1, $s2, $e1, $e2];

foreach ($peoples as $people) {
    switch (get_class($people)) {
        case 'Person':
            $people->showPersonalInfo();
            echo PHP_EOL;
            break;
        case 'Students' :
            $people->showStudentInfo();
            echo PHP_EOL;
            break;
        case 'Employee' :
            $people->showEmployeeInfo();
            echo PHP_EOL;
            break;
    }
}

foreach ($peoples as $people) {
    if (get_class($people) == 'Employee') {
        $people->showEmployeeInfo();
        $people->calculateOvertime(2);
        echo PHP_EOL;
    }
}