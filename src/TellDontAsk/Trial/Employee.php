<?php

namespace Deg540\PHPTestingBoilerplate\TellDontAsk\Error;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function getWorkedHours(): int
    {
        return $this->workedHours;
    }

    public function getHourPrice(): float
    {
        return $this->pricePerHour;
    }
}
