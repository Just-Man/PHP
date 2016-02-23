<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.02.16
 * Time: 19:40
 */
class Students extends Person
{
    private $score;

    /**
     * Students constructor.
     * @param $score
     */
    public function __construct($name, $age, $isMale, $score)
    {
        parent::__construct($name, $age, $isMale);
        $this->score = $score;
    }

    public function showStudentInfo()
    {
        parent::showPersonalInfo();
        echo 'Score is ' . $this->score, PHP_EOL;
    }
}