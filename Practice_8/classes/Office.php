<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 14:05
 */
class Office
{
    protected $name;

    protected $deskEmployee;

    protected $transporter;

    /**
     * Office constructor.
     * @param $deskEmployee
     * @param $transporter
     */
    public function __construct($name, Employee $deskEmployee, Employee $transporter = null)
    {
        $this->name = $name;
        $this->deskEmployee = $deskEmployee;
        $this->transporter = $transporter;
    }
}