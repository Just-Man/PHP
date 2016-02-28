<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 05:26
 */
class SimpleNote
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

    /**
     * @param array $arguments
     */
    public function writeInPage($arguments)
    {
        $numberOfPage = $arguments[0];
        $this->page[$numberOfPage - 1]->setTitle($arguments[1]);
        $this->page[$numberOfPage - 1]->setText($arguments[2]);
    }

    public function showPage($numberOfPage)
    {
        $result['page'] = $this->page[$numberOfPage - 1]->getPage();
        $result['title'] = $this->page[$numberOfPage - 1]->getTitle();
        $result['test'] = $this->page[$numberOfPage - 1]->getText();
        return $result;

    }

    public function deleteInPage($numberOfPage)
    {
        $this->page[$numberOfPage - 1]->setTitle('');
        $this->page[$numberOfPage - 1]->setText('');
    }

    public function showAllPage()
    {
        foreach ($this->page as $key => $item) {
            $result[$key]['Page Number'] = $item->getPage();
            $result[$key]['Title'] = $item->getTitle();
            $result[$key]['Text'] = $item->getText();
//            $result[$key] = implode(' ',$result[$key]);
        }
        return $result;
    }
}
