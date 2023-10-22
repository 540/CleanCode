<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success;

class BackEndDeveloper extends Developer
{
    public function __construct($name, $email, $phoneNumber, $password, array $tasks)
    {
        parent::__construct($name, $email, $phoneNumber, $password, $tasks);
    }

    public function getAllData(): string
    {
        return parent::getAllData() . ' Role: BackEndDeveloper';
    }
}
