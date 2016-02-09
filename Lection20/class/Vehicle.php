<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.02.16
 * Time: 15:58
 */
class Vehicle
{
    private $description;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'Destructor called';
    }
}