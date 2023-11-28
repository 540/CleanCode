<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Success;

interface LeaderInterface extends Employee
{
    public function manageEmployees(): void;
}
