<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Error;

use Exception;

class ThisIsNotMyJobException extends Exception
{
    public function __construct()
    {
        parent::__construct("😠 Este no es mi trabajo 😠", 409);
    }
}
