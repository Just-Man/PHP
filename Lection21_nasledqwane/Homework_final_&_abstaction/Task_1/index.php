<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 20.02.16
 * Time: 09:20
 */

require_once 'class/autoload.php';

$allTask = new AllWork();

$task1 = new Task('Task1', 1);
$task2 = new Task('Task2', 5);
$task3 = new Task('Task3', 3);
$task4 = new Task('Task4', 7);
$task5 = new Task('Task5', 9);
$task6 = new Task('Task6', 13);
$task7 = new Task('Task7', 20);
$task8 = new Task('Task8', 32);
$task9 = new Task('Task9', 40);
$task10 = new Task('Task10', 15);

$allTask->addTask($task1);
$allTask->addTask($task2);
$allTask->addTask($task3);
$allTask->addTask($task4);
$allTask->addTask($task5);
$allTask->addTask($task6);
$allTask->addTask($task7);
$allTask->addTask($task8);
$allTask->addTask($task9);
$allTask->addTask($task10);

$employ = [
    new Employee('b1'),
    new Employee('b2'),
    new Employee('b3'),
    new Employee('b4'),
    new Employee('b5')
];
$day = 1;

foreach ($employ as $item) {
    $item->beginWork();
    $item->setAllWork($allTask);
    $item->setCurrentTask($item->getAllWork());
    $item->beginWork();
    $item->work();
}

foreach ($employ as $item) {
}