<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 22.02.16
 * Time: 19:40
 */
class Employee extends Person
{
    private $daySalary;

    /**
     * Employee constructor.
     * @param $name
     * @param $age
     * @param $isMale
     * @param $daySalary
     */
    public function __construct($name, $age, $isMale, $daySalary)
    {
        parent::__construct($name, $age, $isMale);
        $this->daySalary = $daySalary;
    }


    public function showEmployeeInfo()
    {
        parent::showPersonalInfo();
        echo 'Day Salary is ' . $this->daySalary, PHP_EOL;
    }

    /**
     * @param $hours
     */
    public function calculateOvertime($hours)
    {
        $perHour = $this->daySalary / 8;
        if ($this->age > 18) {
            $overtimePrice = $perHour * 1.5 * $hours;
            echo 'Overtime price is: ' . $overtimePrice, PHP_EOL;
        }
    }
}