<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.02.16
 * Time: 15:50
 */
class Door
{
    private $status;

    private $lockStatus;

    /**
     * Dook constructor.
     * @param $status
     * @param $lockStatus
     */
    public function __construct($status, $lockStatus)
    {
        $this->status = $status;
        $this->lockStatus = new Lock($lockStatus);
    }

    public function display()
    {
        return 'The door is ' . $this->status . ' ' . $this->lockStatus->display();
    }
}