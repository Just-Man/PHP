<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 23.02.16
 * Time: 12:53
 */
class Page
{
    private $page;

    private $title;

    private $text;

    /**
     * Page constructor.
     * @param $page
     * @param $title
     * @param $text
     */
    public function __construct($page, $title = null, $text = null)
    {
        $this->page = $page;
        $this->title = $title;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}