<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 20.02.16
 * Time: 09:21
 */
class Task
{
    private $name;

    private $workingHours;

    /**
     * Task constructor.
     * @param $name
     * @param $workingHours
     */
    public function __construct($name, $workingHours)
    {
        $this->name = $name;
        $this->workingHours = $workingHours;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getWorkingHours()
    {
        return $this->workingHours;
    }

    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;
    }

}