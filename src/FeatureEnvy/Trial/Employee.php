<?php

namespace Deg540\PHPTestingBoilerplate\FeatureEnvy\Trial;

class Employee
{
    private string $name;
    private int $workedHours;
    private float $pricePerHour;
    private string $kindOfBranchOffice;

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
     * @return int
     */
    public function getWorkedHours(): int
    {
        return $this->workedHours;
    }

    /**
     * @return float
     */
    public function getPricePerHour(): float
    {
        return $this->pricePerHour;
    }

    /**
     * @return string
     */
    public function getKindOfBranchOffice(): string
    {
        return $this->kindOfBranchOffice;
    }

    /**
     * @param string $kindOfBranchOffice
     */
    public function setKindOfBranchOffice(string $kindOfBranchOffice): void
    {
        $this->kindOfBranchOffice = $kindOfBranchOffice;
    }
}
