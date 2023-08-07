<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Error;

class Developer
{
    protected string $name;
    protected string $email;
    protected string $phoneNumber;
    protected string $password;
    protected array $tasksToDevelop = [];

    /**
     * @param $name
     * @param $email
     * @param $phoneNumber
     * @param $password
     * @param array $tasks
     */
    public function __construct($name, $email, $phoneNumber, $password, array $tasks)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->tasksToDevelop = $tasks;
    }

    public function getName(): string
    {
        return 'Name: ' . $this->name;
    }

    public function getEmail(): string
    {
        return 'Email: ' . $this->email;
    }

    public function getPhoneNumber(): string
    {
        return 'PhoneNumber: ' . $this->phoneNumber;
    }

    public function getPassword(): string
    {
        return 'Password: ' . $this->password;
    }

    public function getAllData(): string
    {
        return 'Name: ' . $this->getName() .
            ' Email: ' . $this->getEmail() .
            ' PhoneNumber: ' . $this->getPhoneNumber() .
            ' Password: ' . $this->getPassword();
    }

    public function tasksToDevelop(): string
    {
        if (empty($this->tasksToDevelop)) {
            return 'You have no tasks to develop';
        }
        return 'You have tasks to develop';
    }
}
