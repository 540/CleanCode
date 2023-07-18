<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Domain;

interface Employee
{
    public function getName(): string;
    public function getWorkedHours(): int;
    public function getHourPrice(): float;
    public function calculateEmployeeExpense(): float;
}
