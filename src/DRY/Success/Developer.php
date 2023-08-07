<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

class Developer extends Employee
{
    protected array $tasksToDevelop = [];

    public function __construct($name, $email, $phoneNumber, $password, array $tasks)
    {
        parent::__construct($name, $email, $phoneNumber, $password);
        $this->tasksToDevelop = $tasks;
    }

    public function tasksToBeProgrammed(): string
    {
        if (empty($this->tasksToDevelop)) {
            return 'You have no tasks to develop';
        }
        return 'You have tasks to develop';
    }
}
