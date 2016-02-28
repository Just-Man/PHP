<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 08:31
 */
class SimpleNote extends aNotepad
{
    public function writeInPage($numberOfPage, $title, $text)
    {
        $this->page[$numberOfPage - 1]->setTitle($title);
        $this->page[$numberOfPage - 1]->setText($text);
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