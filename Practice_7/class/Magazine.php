<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.02.16
 * Time: 15:10
 */
require_once 'Customer.php';

class Magazine extends AllOfBook
{

    private $numberOfPublication;

    public function __construct($title, $dateOfPublication, $numberOfPublication, $publisher, $genre)
    {
        parent::__construct($title, $dateOfPublication, $publisher, $genre);
        $this->numberOfPublication = $numberOfPublication;

    }

    public function getItem($item)
    {
        if ($item->status == '') {
            $item->status = 'Magazine ' . $item->getTitle() . '  is already get and it is on the library reading room';
            return true;
        } else {
            echo $item->status, PHP_EOL;
            return false;
        }
    }

    public function returnItem($item)
    {
        $item->status = '';
    }

    /**
     * @return mixed
     */
    public function getNumberOfPublication()
    {
        return $this->numberOfPublication;
    }

}