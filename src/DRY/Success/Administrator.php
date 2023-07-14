<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

class Administrator extends Worker
{
    protected array $tasksToManage = [];

    public function __construct($name, $email, $phoneNumber, $password, array $tasks) {
        parent::__construct($name, $email, $phoneNumber, $password);
        $this->tasksToManage = $tasks;
    }
    
    public function tasksToManage(): string
    {
        if (empty($this->tasksToManage)) {
            return 'You have no tasks to manage';
        }
        return 'You have tasks to manage';
    }
}