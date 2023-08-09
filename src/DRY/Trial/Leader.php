<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Trial;

class Leader
{
    //Here we are broking the DRY principle
    protected string $name;
    protected string $email;
    protected string $phoneNumber;
    protected string $password;
    protected array $tasksToLead = [];

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
        $this->tasksToLead = $tasks;
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
        return $this->getName() .
            ' ' . $this->getEmail() .
            ' ' . $this->getPhoneNumber() .
            ' ' . $this->getPassword();
    }

    public function tasksToLead(): string
    {
        if (empty($this->tasksToLead)) {
            return 'You have no tasks to lead';
        }
        return 'You have tasks to lead';
    }
}
