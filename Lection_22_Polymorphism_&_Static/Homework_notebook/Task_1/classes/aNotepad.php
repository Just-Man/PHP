<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 05:26
 */
abstract class aNotepad
{
    protected $page;

    protected $numberOfPages;

    /**
     * aNotepad constructor.
     * @param $page
     */
    public function __construct($numberOfPages)
    {
        $this->createPages($numberOfPages);
    }

    public function createPages($numberOfPages)
    {
        for ($i = 0; $i < $numberOfPages; $i += 1) {
            $this->page[$i] = new Page(($i + 1));
        }

    }

    abstract public function writeInPage($numberOfPages, $title, $text);

    abstract public function deleteInPage($numberOfPages);

    abstract public function showPage($numberOfPages);

    abstract public function showAllPage();
}
