<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.02.16
 * Time: 15:10
 */
class Book extends AllOfBook
{

    /**
     * @var
     */
    private $author;

    /**
     * @var
     */
    private $covers;


    /**
     * Book constructor.
     * @param $catalogNumber
     * @param $title
     * @param $dateOfPublication
     * @param $publisher
     * @param $genre
     * @param $covers
     * @param $author
     */
    public function __construct($title, $dateOfPublication, $publisher, $genre, $covers, $author)
    {
        parent::__construct($title, $dateOfPublication, $publisher, $genre);
        $this->covers = $covers;
        $this->author = $author;
    }

    public function getItem($item)
    {
        if ($item->status == '') {
            $item->status = 'Book ' . $item->getTitle() . '  is already get to home. Please try again later';
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
    public function getCovers()
    {
        return $this->covers;
    }
}