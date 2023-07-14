<?php

namespace Deg540\PHPTestingBoilerplate\DRY\Error;

class Administrator
{
    protected $name;
    protected $email;
    protected $phoneNumber;
    protected $password;

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
        return 'Name: ' . $this->getName() .
            ' Email: ' . $this->getEmail() .
            ' PhoneNumber: ' . $this->getPhoneNumber() .
            ' Password: ' . $this->getPassword();
    }

    public function tasksToManage(): string
    {
        if (rand(0, 1) == 0) {
            return 'You have no tasks to manage';
        }
        return 'You have tasks to manage';
    }
}