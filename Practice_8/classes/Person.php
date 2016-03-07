<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 13:34
 */
class Person
{
    protected $name;

    protected $number;

    protected $uniqueNumber;

    /**
     * Person constructor.
     * @param $name
     * @param $number
     * @param $egn
     */
    public function __construct($name, $number, $uniqueNumber)
    {
        $this->name = $name;
        $this->number = $number;
        $this->uniqueNumber = $uniqueNumber;
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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getUniqueNumber()
    {
        return $this->uniqueNumber;
    }

    public function receivePackage(Person $from, Person $to, Package $package)
    {
        new Protocols($from, $to, $package);
    }
}