<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.02.16
 * Time: 15:27
 */
class Customer
{
    private static $number = 0;

    private $id;

    private $name;

    private $date;

    private $booksTaken = [];

    /**
     * Reader constructor.
     * @param $number
     * @param $name
     * @param $date
     */
    public function __construct($name)
    {
        $date = new DateTime();
        $this->id = static::$number += 1;
        $this->name = $name;
        $this->date = $date->format("d.m.Y H:i");
    }

    /**
     * @return int mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return array
     */
    public function getBooksTaken()
    {
        return $this->booksTaken;
    }

    /**
     * @param object $item
     */
    public function setBooksTaken($item)
    {
        $getDate = new DateTime();
        $this->booksTaken = $item;
        $item->getsBy[] = $this;
        $item->getItem($item);
        $item->setGetsDate($getDate->format("d.m.Y H:i"));
    }

    public function returnItem($item)
    {
        $dateOfReturn = new DateTime();
        $item->returnItem($item);
        $item->setReturnDate($dateOfReturn->format("d.m.Y H:i"));
    }

}