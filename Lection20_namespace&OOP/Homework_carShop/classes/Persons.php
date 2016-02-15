<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 14.02.16
 * Time: 13:12
 */
class Persons
{
    private $name;

    private $age;

    private $personalNumber;

    private $isMale;

    private $money;

    private $friends = [];

    private $car;

    /**
     * Persons constructor.
     * @param $name
     * @param $age
     * @param $personalNumber
     * @param $isMale
     * @param $money
     */
    public function __construct($name, $age, $personalNumber, $isMale, $money)
    {
        $this->name = $name;
        $this->age = $age;
        $this->personalNumber = $personalNumber;
        $this->isMale = $isMale;
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getPersonalNumber()
    {
        return $this->personalNumber;
    }

    /**
     * @return mixed
     */
    public function getIsMale()
    {
        return $this->isMale;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * @param mixed $friends
     */
    public function setFriends(Persons $friends)
    {
        $this->friends = $friends;
    }

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @param mixed $car
     */
    public function buyCar(Cars $car)
    {
        $price = $car->getPrice();
        if ($this->money >= $price) {
            $this->car = $car;
            $this->money -= $price;
            $car->setOwner($this);
            echo 'You heve a new car', PHP_EOL;
            return true;
        } else {
            echo 'You don\'t have enough money';
            return false;
        }

    }

    public function sellCarForScrap()
    {
        $result = $this->car->calculateCarPriceForScrap(3.5);
        $this->money += $result;
        $this->car = null;
    }

}