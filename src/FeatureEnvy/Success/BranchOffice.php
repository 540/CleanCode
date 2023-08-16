<?php

namespace Deg540\PHPTestingBoilerplate\FeatureEnvy\Success;

class BranchOffice
{
    public const ELECTRICITY = "ELECTRICITY";
    public const WATER = "WATER";
    public const GAS = "GAS";

    /**
     * @var Employee[]
     */
    private array $employees;
    private string $kindOfBranchOffice;

    public function __construct(string $kindOfBranchOffice)
    {
        $this->employees = array();
        $this->kindOfBranchOffice = $kindOfBranchOffice;
    }

    /**
     * @return Employee[]
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function insertEmployee(Employee $employee): void
    {
        $employee->setKindOfBranchOffice($this->kindOfBranchOffice);
        $this->employees[] = $employee;
    }

    public function calculateSalary(): float
    {
        $salary = 0.0;
        foreach ($this->getEmployees() as $employee) {
            $salary = $salary + $employee->calculateSalary();
        }
        return $salary;
    }
}
