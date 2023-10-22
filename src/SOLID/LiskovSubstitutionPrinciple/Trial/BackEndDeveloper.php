<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Trial;

class BackEndDeveloper extends Developer
{
    public function __construct($name, $email, $phoneNumber, $password, array $tasks)
    {
        parent::__construct($name, $email, $phoneNumber, $password, $tasks);
    }

    // Here we are breaking the Liskov Substitution Principle
    public function getAllData(): string
    {
        return $this->getName() .
            ' ' . $this->getEmail() .
            ' ' . $this->getPhoneNumber() .
            ' ' . $this->getPassword() .
            ' Role: BackEndDeveloper';
    }
}
