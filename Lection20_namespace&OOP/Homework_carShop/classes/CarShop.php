<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 14.02.16
 * Time: 13:12
 */
class CarShop
{
    private $cars;

    private $lastUsedCar = -1;

    /**
     * CarShop constructor.
     * @param $cars
     */
    public function __construct($cars)
    {
        $this->cars = func_get_args();
    }


    public function sellCar(Persons $buyer)
    {
        $currentCar = $this->nextCar();
        if ($buyer->buyCar($currentCar)) {
            $currentCar->setOwner($buyer);
            $this->removeCar($currentCar);
        }

    }

    public function nextCar()
    {
        foreach ($this->cars as $key => $car) {
            if (!isset($car)) {
                continue;
            } else if ($key === ($this->lastUsedCar + 1)) {
                echo 'Car: ' . ($key + 1) . PHP_EOL . PHP_EOL .
                    'Brand: ' . $car->getBrand() . PHP_EOL .
                    'Model: ' . $car->getModel() . PHP_EOL .
                    'Max. Speed: ' . $car->getMaxSpeed() . 'km/h' . PHP_EOL .
                    'Car color: ' . $car->getColor() . PHP_EOL .
                    'Price: ' . $car->getPrice() . ' лв.' . PHP_EOL . PHP_EOL;
                $this->lastUsedCar = $key;
                return $this->cars[$key];
            }
        }
    }

    public function removeCar(Cars $car)
    {
        foreach ($this->cars as $key => $carInShop) {
            if ($car == $carInShop) {
                unset($this->cars[$key]);
            }
        }
    }

    public function addCar(Cars $car)
    {
        $this->cars[] = $car;
    }

    public function showAll()
    {
        foreach ($this->cars as $key => $car) {
            echo 'Car: ' . ($key + 1) . PHP_EOL . PHP_EOL .
                'Brand: ' . $car->getBrand() . PHP_EOL .
                'Model: ' . $car->getModel() . PHP_EOL .
                'Max. Speed: ' . $car->getMaxSpeed() . 'km/h' . PHP_EOL .
                'Car color: ' . $car->getColor() . PHP_EOL .
                'Price: ' . $car->getPrice() . ' лв.' . PHP_EOL . PHP_EOL;
        }
    }
}
