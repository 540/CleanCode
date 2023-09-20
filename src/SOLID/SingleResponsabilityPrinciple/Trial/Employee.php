<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Trial;

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
        return floatval($this->pricePerHour * $this->workedHours);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
