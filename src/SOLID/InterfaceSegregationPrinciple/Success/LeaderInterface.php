<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Success;

interface LeaderInterface
{
    public function startWorkDay(string $startHour): void;
    public function finishWorkDay(string $finishHour): void;
    public function manageEmployees(): void;
}
