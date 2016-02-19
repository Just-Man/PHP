<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 19.02.16
 * Time: 15:01
 */
class Guy
{
    private $name;

    private $age;

    private $city;

    /**
     * Guy constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}