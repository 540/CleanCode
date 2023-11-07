<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Error;

use Exception;

class BackEndDeveloper extends Developer
{
    public function __construct($name, $email, $phoneNumber, $password)
    {
        parent::__construct($name, $email, $phoneNumber, $password);
    }

    // Here we are breaking the Liskov Substitution Principle
    /**
     * @throws Exception
     */
    public function developInHTML(): string
    {
        throw new Exception('I don´t know how to program in HTML and I refuse to learn.');
    }
}
