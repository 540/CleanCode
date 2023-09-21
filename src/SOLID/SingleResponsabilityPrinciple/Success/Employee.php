<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success;

class Employee
{
    private string $name;
    private int $workedHours;
    private float $pricePerHour;

    public function __construct(string $name, int $workedHours, float $pricePerHour)
    {
        $this->name = $name;
        $this->workedHours = $workedHours;
        $this->pricePerHour = $pricePerHour;
    }

    public function calculateSalary(): float
    {
        return $this->pricePerHour * $this->workedHours;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getData(): string
    {
        return 'Name: ' . $this->getName() . ', Salary: ' . $this->calculateSalary();
    }
}
