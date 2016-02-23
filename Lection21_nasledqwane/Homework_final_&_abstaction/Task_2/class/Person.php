<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.02.16
 * Time: 19:40
 */
class Person
{
    protected $age;
    private $name;
    private $isMale;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     * @param $isMale
     */
    public function __construct($name, $age, $isMale)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
    }

    public function showPersonalInfo()
    {
        echo 'Name is ' . $this->name, PHP_EOL;
        echo 'Age is ' . $this->age, PHP_EOL;
        echo 'Gender is ';
        echo $this->isMale ? 'Male' : 'Female', PHP_EOL;
    }

}