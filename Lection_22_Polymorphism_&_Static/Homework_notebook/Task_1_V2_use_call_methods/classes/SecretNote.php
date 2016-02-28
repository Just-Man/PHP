<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 08:35
 */
class SecretNote extends SimpleNote
{
    private $pass;

    /**
     * SecretNote constructor.
     * @param string $pass
     * @param int $numberOfPage
     */
    public function __construct($numPages, $pass)
    {
        parent::__construct($numPages);
        $this->pass = $pass;
    }

    public function __call($name, $arguments = null)
    {
        if ($_GET['pass'] == $this->pass) {
            return $this->$name($arguments);
        } else {
            echo 'Password don\'t match ', PHP_EOL;
        }
    }
}