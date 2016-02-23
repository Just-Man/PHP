<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.02.16
 * Time: 15:12
 */
abstract class AllOfBook
{
    private static $catalogNumber = 0;
    protected $status;
    private $title;
    private $dateOfPublication;
    private $publisher;
    private $genre;
    private $getsBy;
    private $getsDate;
    private $returnDate;

    /**
     * AllOfBook constructor.
     * @param $catalogNumber
     * @param $title
     * @param $dateOfPublication
     * @param $publisher
     * @param $genre
     */
    public function __construct($title, $dateOfPublication, $publisher, $genre)
    {

        $this->catalogNumber = self::$catalogNumber += 1;
        $this->title = $title;
        $this->dateOfPublication = $dateOfPublication;
        $this->publisher = $publisher;
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDateOfPublication()
    {
        return $this->dateOfPublication;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $getsBy
     */
    public function setGetsBy($getsBy)
    {
        $this->getsBy = $getsBy;
    }

    /**
     * @return mixed
     */
    public function getGetsDate()
    {
        return $this->getsDate;
    }

    /**
     * @param mixed $getsDate
     */
    public function setGetsDate($getsDate)
    {
        $this->getsDate = $getsDate;
    }

    /**
     * @return mixed
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @param mixed $returnDate
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;
    }

    /**
     * @param mixed $item
     */
    abstract public function getItem($item);


    public function returnItem($item)
    {
        $item->status = '';
    }

}