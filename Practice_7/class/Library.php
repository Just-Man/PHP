<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.02.16
 * Time: 15:28
 */
class Library
{
    private $all = [];

    private $allGetToRead;

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->all;
    }


    /**
     * @param mixed $item
     */
    public function addBook(Book $item)
    {
        if (in_array($item, $this->all, false)) {
            echo 'Item is already in library';
            return false;
        } else {
            $this->all[] = $item;
            return true;
        }

    }

    /**
     * @param mixed $item
     */
    public function addLearnBook(LearnBook $item)
    {
        $this->all[] = $item;
    }

    /**
     * @param mixed $item
     */
    public function addMagazine(Magazine $item)
    {
        $this->all[] = $item;
    }

    /**
     * @return mixed
     */
    public function getAllGetToRead()
    {
        return $this->allGetToRead;
    }

    /**
     * @param mixed $getToRead
     */
    public function setAllGetToRead($getToRead)
    {
        $this->allGetToRead[] = $getToRead;
    }

}