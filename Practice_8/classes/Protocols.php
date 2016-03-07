<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 13:55
 */
class Protocols
{
    private static $number;

    protected $from;

    protected $to;

    protected $packages;

    /**
     * Protocols constructor.
     * @param $from
     * @param $to
     * @param $packages
     */
    public function __construct(Person $from, Person $to, $packages)
    {
        static::$number += 1;
        $this->from = $from;
        $this->to = $to;
        $this->packages[] = $packages;
        $this->transferPackage($from, $to, $packages);
    }

    public function transferPackage($from, $to, $packages)
    {
        if ($from instanceof Client) {
            foreach ( as $item) {

            }
        }
        if ($from instanceof Employee && $to instanceof Employee) {

        }
        if ($to instanceof Client) {

        }
    }
}