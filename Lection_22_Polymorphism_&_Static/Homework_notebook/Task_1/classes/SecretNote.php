<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 08:35
 */
class SecretNote extends aNotepad
{
    private $pass;

    /**
     * SecretNote constructor.
     * @param string $pass
     * @param int $numberOfPage
     */
    public function __construct($pass, $numberOfPage)
    {
        parent::__construct($numberOfPage);
        $this->pass = $pass;
    }

    /**
     * @param string $numberOfPage
     * @param string $title
     * @param string $text
     */
    public function writeInPage($numberOfPage, $title, $text)
    {
        if ($_GET['pass'] == $this->pass) {
            $this->page[$numberOfPage - 1]->setTitle($title);
            $this->page[$numberOfPage - 1]->setText($text);
        }

    }

    public function showPage($numberOfPage)
    {
        if ($_GET['pass'] === $this->pass) {
            $result['page'] = $this->page[$numberOfPage - 1]->getPage();
            $result['title'] = $this->page[$numberOfPage - 1]->getTitle();
            $result['test'] = $this->page[$numberOfPage - 1]->getText();
            return $result;
        }

    }

    public function deleteInPage($numberOfPage)
    {
        if ($_GET['pass'] == $this->pass) {
            $this->page[$numberOfPage - 1]->setTitle('');
            $this->page[$numberOfPage - 1]->setText('');
        }
    }

    public function showAllPage()
    {
        if ($_GET['pass'] == $this->pass) {
            foreach ($this->page as $key => $item) {
                $result[$key]['Page Number'] = $item->getPage();
                $result[$key]['Title'] = $item->getTitle();
                $result[$key]['Text'] = $item->getText();
//            $result[$key] = implode(' ',$result[$key]);
            }
            return $result;
        }
    }
}