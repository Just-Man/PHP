<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 19.02.16
 * Time: 13:07
 */

require_once 'Guy.php';

require_once 'Guys.php';

class SomeClassException extends Exception
{
    private $info;

    public function setInfo($info)
    {
        $this->info = $info;
    }
}


$objectsArray = [new Guys('f', 7), new Guy('a', 2), new Guy('b', 3), new Guy('c', 4), new Guy('d', 5), new Guy('e', 6)];

//shuffle($objectsArray);
$className = null;
$hasDifferent = false;
try {
    $lastElement = count($objectsArray) - 1;
    foreach ($objectsArray as $id => $item) {
        if (!isset($className)) {
            if (get_class($objectsArray[$lastElement]) == get_class($item)) {
                $className = get_class($item);
            } else if (get_class($objectsArray[$lastElement]) == get_class($objectsArray[$lastElement - 1])) {
                $className = get_class($objectsArray[$lastElement]);
            }

        }
        if ($className !== get_class($item)) {
            echo 'Index is: ' . $id, PHP_EOL;
            $hasDifferent = true;
            break;
        }
    }
    if (!$hasDifferent) {
        throw new SomeClassException('Haven\'t different element');
    } else {
        if ($id != count($objectsArray) - 1) {
            $otherID = count($objectsArray) - 1;
        } else {
            $otherID = count($objectsArray) - 2;
        }
        $reflectionClass1 = new ReflectionClass($objectsArray[$otherID]);
        $reflectionClass = new ReflectionClass($objectsArray[$id]);
        $methodsClass1 = $reflectionClass1->getMethods();
        $methodsClass = $reflectionClass->getMethods();
        $result = array_diff($methodsClass, $methodsClass1);
        var_dump($result);
    }
} catch (SomeClassException $e) {
    print_r($e);
} finally {
    $objectsArray = [];
}
