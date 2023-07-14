<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

class Programmer extends Worker
{
    protected array $tasksToBeProgrammed = [];

    public function __construct($name, $email, $phoneNumber, $password, array $tasks) {
        parent::__construct($name, $email, $phoneNumber, $password);
        $this->tasksToBeProgrammed = $tasks;
    }
    
    public function tasksToBeProgrammed(): string
    {
        if (empty($this->tasksToBeProgrammed)) {
            return 'You have no tasks to be programmed';
        }
        return 'You have tasks to be programmed';
    }
}