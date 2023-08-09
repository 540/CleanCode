<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

abstract class Employee
{
    protected string $name;
    protected string $email;
    protected string $phoneNumber;
    protected string $password;
    protected array $tasksToWork;

    /**
     * @param string $name
     * @param string $email
     * @param string $phoneNumber
     * @param string $password
     * @param array $tasksToWork
     */
    public function __construct(string $name, string $email, string $phoneNumber, string $password, array $tasksToWork)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->tasksToWork = $tasksToWork;
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

    /**
     * @return array
     */
    public function getTasksToWork(): array
    {
        return $this->tasksToWork;
    }

    public function getAllData(): string
    {
        return $this->getName() . ' ' . $this->getEmail() . ' ' . $this->getPhoneNumber() . ' ' . $this->getPassword();
    }
}
