<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 13:32
 */
class Company
{
    private static $instance;

    private $offices;

    /**
     * Company constructor.
     * @param $office
     */
    public function __construct()
    {
    }

    public static function check()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getOffices()
    {
        return $this->offices;
    }

    /**
     * @param mixed $offices
     */
    public function setOffices(Office $offices)
    {
        $this->offices[] = $offices;
    }


}