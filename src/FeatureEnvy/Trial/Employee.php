<?php

namespace Deg540\PHPTestingBoilerplate\FeatureEnvy\Trial;

class Employee
{
    private string $name;
    private int $workedHours;
    private float $pricePerHour;
    private string $kindOfBranchOffice;

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

    public function getPricePerHour(): float
    {
        return $this->pricePerHour;
    }

    public function getKindOfBranchOffice(): string
    {
        return $this->kindOfBranchOffice;
    }

    public function setKindOfBranchOffice(string $kindOfBranchOffice): void
    {
        $this->kindOfBranchOffice = $kindOfBranchOffice;
    }
}
