<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 14.02.16
 * Time: 13:12
 */
require_once 'Persons.php';

class Cars
{
    private $brand;

    private $model;

    private $color;

    private $maxSpeed;

    private $currentSpeed = 0;

    private $currentGear = 'N';

    private $isSportCar;

    private $price;

    private $owner;

    /**
     * Cars constructor.
     * @param string $brand
     * @param string $model
     * @param string $color
     * @param int $price
     * @param int $maxSpeed
     * @param bool $isSportCar
     */
    public function __construct($brand, $model, $color, $price, $maxSpeed, $isSportCar)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        $this->maxSpeed = $maxSpeed;
        $this->isSportCar = $isSportCar;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return int
     */
    public function getCurrentGear()
    {
        return $this->currentGear;
    }

    /**
     * @param int $currentGear
     */
    public function setCurrentGear($currentGear)
    {
        $this->currentGear = $currentGear;
    }

    /**
     * @return boolean
     */
    public function getIsSportCar()
    {
        return $this->isSportCar;
    }

    /**
     * @return stdClass
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param stdClass $owner
     */
    public function setOwner(Persons $owner)
    {
        $this->owner = $owner;
    }

    public function accelerate()
    {
        if ($this->currentSpeed + 10 < $this->maxSpeed) {
            $this->currentSpeed += 10;
        }
        return $this;
    }

    public function changeGearUp()
    {
        if ($this->currentGear < 5) {
            $this->currentGear += 1;
        }
        return $this;
    }

    public function changeGearDown()
    {
        if ($this->currentGear <= 0) {
            $this->currentGear = 'N';
            $this->currentSpeed = 0;
            return 'You are on neutral gear';
        } else {
            $this->currentGear -= 1;
            $this->currentSpeed -= 50;
            return $this;
        }
    }

    public function changeGear($nextGear)
    {
        if ($nextGear > 0 && $nextGear <= 5) {
            $this->currentGear = $nextGear;
        }
    }

    public function changeColor($newColor)
    {
        if ($this->color !== $newColor) {
            $this->color = $newColor;
            return 'Color is changed';
        } else {
            return 'Color is the same';
        }
    }

    public function isMoreExpensive(Cars $car)
    {
        if ($this->price < $car->getPrice()) {
            return 'Other car is more Expensive';
        } else {
            return 'Your car is more Expensive';
        }
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function calculateCarPriceForScrap($metalPrice, $coef = 0.2)
    {
        if ($this->color == 'white' && $this->color == 'black') {
            $coef += 0.05;
        }

        if ($this->isSportCar) {
            $coef += 0.05;
        }

        return $this->price * ($metalPrice * $coef);
    }

}