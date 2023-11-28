<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Success\Interfaces;

interface Employee
{
    public function startWorkDay(string $startHour): void;
    public function finishWorkDay(string $finishHour): void;
}
