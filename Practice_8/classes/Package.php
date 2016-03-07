<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 07.03.16
 * Time: 13:57
 */
class Package
{
    private static $number;

    private $sender;

    private $receiver;

    private $date;

    private $description;

    private $status;

    private $protocolsNumber;

    /**
     * Shipment constructor.
     * @param $sender
     * @param $receiver
     * @param $date
     * @param $description
     * @param $status
     * @param $protocolsNumber
     */
    public function __construct(Client $sender, Client $receiver, $date, $description, $status, $protocolsNumber)
    {
        static::$number += 1;
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->date = new DateTime();
        $this->description = $description;
        $this->status = $status;
        $this->protocolsNumber[] = $protocolsNumber;
    }
}