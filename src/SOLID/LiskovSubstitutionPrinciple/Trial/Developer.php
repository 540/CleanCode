<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Trial;

class Developer
{
    protected string $name;
    protected string $email;
    protected string $phoneNumber;
    protected string $password;

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
        return 'Phone Number: ' . $this->phoneNumber;
    }

    public function getPassword(): string
    {
        return 'Password: ' . $this->password;
    }

    public function developInHTML(): string
    {
        return "I´m " . $this->getName() . " and i´m developing a HTML login";
    }
}
