<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

class Leader extends Employee
{
    protected array $tasksToLead = [];

    public function __construct($name, $email, $phoneNumber, $password, array $tasks)
    {
        parent::__construct($name, $email, $phoneNumber, $password);
        $this->tasksToLead = $tasks;
    }

    public function tasksToLead(): string
    {
        if (empty($this->tasksToLead)) {
            return 'You have no tasks to lead';
        }
        return 'You have tasks to lead';
    }
}
