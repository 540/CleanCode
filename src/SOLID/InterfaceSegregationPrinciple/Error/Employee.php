<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Error;

interface Employee
{
    public function startWorkDay(string $startHour): void;
    public function finishWorkDay(string $finishHour): void;
    public function develop(): void;
    public function manageEmployees(): void;
}
