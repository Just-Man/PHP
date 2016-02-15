<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 03.02.16
 * Time: 15:45
 */
class Lock
{
    private $status;

    /**
     * Lock constructor.
     * @param $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function display()
    {
        return 'The lock status is ' . $this->status;
    }


}
