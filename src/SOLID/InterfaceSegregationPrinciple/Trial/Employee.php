<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Trial;

interface Employee
{
    public function startWorkDay(string $startHour): void;
    public function finishWorkDay(string $finishHour): void;
    public function develop(): void;
    public function manageEmployees(): void;
}
