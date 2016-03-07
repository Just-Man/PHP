<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 13:43
 */
class Employee extends Person
{
    protected $shipments;

    /**
     * @return mixed
     */
    public function getShipments($package)
    {
        foreach ($this->shipments as $item) {
            if ($item == $package) {
                return $this->shipments[$package];
            }
        }
        return false;
    }

    /**
     * @param mixed $shipments
     */
    public function setShipments($package)
    {
        $this->shipments[] = $package;
    }

    public function remShipments($package)
    {
        foreach ($this->$shipments as $item) {
            if ($item == $package) {
                unset($this->shipments[$package]);
            }
        }
    }
}