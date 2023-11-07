<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success;

class BackEndDeveloper extends Developer
{
    public function __construct($name, $email, $phoneNumber, $password)
    {
        parent::__construct($name, $email, $phoneNumber, $password);
    }

    public function developInHTML(): string
    {
        return "I don´t know how to program in HTML and I refuse to learn.";
    }
}
