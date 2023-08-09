<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

class Leader extends Employee
{
    public function __construct($name, $email, $phoneNumber, $password, array $tasks)
    {
        parent::__construct($name, $email, $phoneNumber, $password, $tasks);
    }

    public function tasksToLead(): string
    {
        if (empty($this->getTasksToWork())) {
            return 'You have no tasks to lead';
        }
        return 'You have tasks to lead';
    }
}
