<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared;

class Employee
{
    private string $name;
    private int $workedHours;
    private float $pricePerHour;

    /**
     * @param string $name
     * @param int $workedHours
     * @param float $pricePerHour
     */
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

    public function calculateEmployeeExpense(): float
    {
        return $this->workedHours * $this->pricePerHour;
    }
}
