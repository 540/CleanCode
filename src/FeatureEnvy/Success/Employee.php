<?php

namespace Deg540\PHPTestingBoilerplate\FeatureEnvy\Success;

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

    public function calculateSalary(): float
    {
        /**
         * Moving this method to Employee class we can resolve feature envy error
         */
        $totalHours = $this->getWorkedHours();
        switch ($this->getKindOfBranchOffice()) {
            case BranchOffice::ELECTRICITY:
                $totalHours = $totalHours + 8;
                break;
            case BranchOffice::GAS:
                $totalHours = $totalHours + 4;
                break;
            case BranchOffice::WATER:
                $totalHours = $totalHours + 1;
                break;
        }
        return $this->getPricePerHour() * $totalHours;
    }
}
