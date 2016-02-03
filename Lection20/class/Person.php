<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.02.16
 * Time: 14:33
 */
class Person
{
    private $f_name;
    private $l_name;
    private $age;
    private $personal_number;
    private $gender;
    private $weight;

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

    /**
     * @return mixed
     */
    public function getPersonalNumber()
    {
        return $this->personal_number;
    }

    /**
     * @param mixed $personal_number
     */
    public function setPersonalNumber($personal_number)
    {
        $this->personal_number = $personal_number;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getInfo()
    {
        return sprintf('Hi my name is %s %s',
            $this->getFName(),
            $this->getLName());
    }

    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->f_name;
    }

    /**
     * @param mixed $f_name
     */
    public function setFName($f_name)
    {
        $this->f_name = $f_name;
    }

    /**
     * @return mixed
     */
    public function getLName()
    {
        return $this->l_name;
    }

    /**
     * @param mixed $l_name
     */
    public function setLName($l_name)
    {
        $this->l_name = $l_name;
    }
}

