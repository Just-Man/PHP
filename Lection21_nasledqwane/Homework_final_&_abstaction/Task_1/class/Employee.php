<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 20.02.16
 * Time: 09:23
 */
class Employee
{
    private $name;

    private $currentTask;

    private $hoursLeft;

    private $allWork;

    /**
     * Employee constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAllWork()
    {
        return $this->allWork;
    }

    public function setAllWork($allWork)
    {
        $this->allWork = $allWork;
    }

    public function getCurrentTask()
    {
        return $this->currentTask;
    }

    public function setCurrentTask($allWork)
    {
        $this->currentTask = $allWork->getTask();
        $taskIndex = ($allWork->getCurrentUnassignedTask() + 1);
        if ($taskIndex < 10) {
            $allWork->setCurrentUnassignedTask(($taskIndex));
            echo $this->currentTask->getName() . ' assigned to ' . $this->name, PHP_EOL;
            $this->work();
        } else if ($taskIndex == 10) {
            $allWork->setCurrentUnassignedTask(($taskIndex));
            echo $this->currentTask->getName() . ' assigned to ' . $this->name, PHP_EOL;
            $this->work();
        } else {
            echo 'No more tasks';
        }
    }

    public function work()
    {
        $taskTime = $this->currentTask->getWorkingHours();
        if ($taskTime > $this->hoursLeft) {
            $leftTime = $taskTime - $this->hoursLeft;
            $this->currentTask->setWorkingHours($leftTime);
            $this->hoursLeft = 0;
        } else {
            $this->hoursLeft = $this->hoursLeft - $taskTime;
            echo $this->currentTask->getName() . ' is done from '
                . $this->name . ' after ' . $taskTime . ' hours', PHP_EOL . PHP_EOL;
        };
        if ($this->hoursLeft > 0) {
            $this->setCurrentTask($this->allWork);
        } else {
            echo $this->name . " working time at the day end", PHP_EOL . PHP_EOL;
            return false;
        }
    }

    public function beginWork()
    {
        $this->hoursLeft = 8;
    }

    /**
     * @return mixed
     */
    public function getHoursLeft()
    {
        return $this->hoursLeft;
    }

    /**
     * @param mixed $hoursLeft
     */
    public function setHoursLeft($hoursLeft)
    {
        $this->hoursLeft = $hoursLeft;
    }
}