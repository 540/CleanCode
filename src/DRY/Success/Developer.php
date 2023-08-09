<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

class Developer extends Employee
{
    public function __construct($name, $email, $phoneNumber, $password, array $tasks)
    {
        parent::__construct($name, $email, $phoneNumber, $password, $tasks);
    }

    public function tasksToBeProgrammed(): string
    {
        if (empty($this->getTasksToWork())) {
            return 'You have no tasks to develop';
        }
        return 'You have tasks to develop';
    }
}
