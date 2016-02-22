<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 20.02.16
 * Time: 09:20
 */
class AllWork
{
    private $tasks;

    private $freePlaceForTasks = 10;

    private $currentUnassignedTask;

    /**
     * AllWork constructor.
     */
    public function __construct()
    {
        $this->tasks = [];
        $this->freePlaceForTasks = 10;
        $this->currentUnassignedTask = 0;
    }

    /**
     * @param mixed $task
     */
    public function addTask(Task $task)
    {
        if ($this->freePlaceForTasks) {
            $this->tasks[] = $task;
            $this->setFreePlaceForTasks();
            echo $task->getName() . ' is added to tasks', PHP_EOL;
        } else {
            echo 'You can\'t add more task';
        }
    }

    public function getFreePlaceForTasks()
    {
        return $this->freePlaceForTasks;
    }

    public function setFreePlaceForTasks()
    {
        $this->freePlaceForTasks =
        $this->freePlaceForTasks = 10 - count(array_filter($this->tasks));
    }

    public function isAllWorkIsDone()
    {
        $isDone = true;
        foreach ($this->tasks as $item) {
            if (!$item->getWorkingHours()) {
                $isDone = false;
                break;
            }
        }
        return $isDone;
    }

    public function getCurrentUnassignedTask()
    {
        return $this->currentUnassignedTask;
    }

    public function setCurrentUnassignedTask($currentUnassignedTask)
    {
        $this->currentUnassignedTask = $currentUnassignedTask;
    }

    public function getTask()
    {
        $taskIndex = $this->currentUnassignedTask;
        if ($taskIndex > 0 && $taskIndex <= 9) {
            $taskIndex -= 1;
            $this->tasks[$taskIndex] = null;
        } else if ($taskIndex == 10) {
            $this->tasks[$taskIndex] = null;
        }
        $this->setFreePlaceForTasks();
        return $this->tasks[$this->currentUnassignedTask];
    }

}