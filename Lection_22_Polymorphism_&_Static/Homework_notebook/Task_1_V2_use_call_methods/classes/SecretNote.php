<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 25.02.16
 * Time: 08:35
 */
class SecretNote extends Note
{
    private $pass;

    /**
     * SecretNote constructor.
     * @param string $pass
     * @param int $numberOfPage
     */
    public function __construct($arguments)
    {
        parent::__construct($arguments[0]);
        $this->pass = $arguments[1];
    }

    public function __call($name, $arguments)
    {
        if ($_GET['pass'] == $this->pass) {
            return $this->$name($arguments);
        } else {
            echo 'Password don\'t match ', PHP_EOL;
        }
    }
}