<?php

namespace Deg540\PHPTestingBoilerplate\TellDontAsk\Success;

class Employee
{
    private string $name;
    private int $workedHours;
    private float $pricePerHour;

    private const BIG_SALARY = 750;

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

    /**
     * @return bool
     */
    public function hasBigSalary(): bool
    {
        return $this->pricePerHour * $this->workedHours > self::BIG_SALARY;
    }
}
