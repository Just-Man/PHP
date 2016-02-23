<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.02.16
 * Time: 15:11
 */
class LearnBook extends AllOfBook
{

    private $author;

    private $numberOfPublication;

    public function __construct($title, $dateOfPublication, $numberOfPublication, $publisher, $genre, $author)
    {
        parent::__construct($title, $dateOfPublication, $publisher, $genre);
        $this->author = $author;
        $this->numberOfPublication = $numberOfPublication;

    }

    public function getItem($item)
    {
        if ($item->status == '') {
            $item->status = 'Textbook ' . $item->getTitle() . ' is get to home. Please try again later';
            return true;
        } else {
            echo $item->status, PHP_EOL;
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getNumberOfPublication()
    {
        return $this->numberOfPublication;
    }
}