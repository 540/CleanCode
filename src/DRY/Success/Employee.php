<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Success;

abstract class Employee
{
    protected string $name;
    protected string $email;
    protected string $phoneNumber;
    protected string $password;

    /**
     * @param $name
     * @param $email
     * @param $phoneNumber
     * @param $password
     */
    public function __construct($name, $email, $phoneNumber, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
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
        return $this->getName() . ' ' . $this->getEmail() . ' ' . $this->getPhoneNumber() . ' ' . $this->getPassword();
    }
}