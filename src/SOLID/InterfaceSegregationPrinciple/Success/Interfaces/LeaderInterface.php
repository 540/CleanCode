<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Success\Interfaces;

interface LeaderInterface extends Employee
{
    public function manageEmployees(): void;
}
