<?php

namespace Deg540\PHPTestingBoilerplate\FeatureEnvy\Trial;

use Deg540\PHPTestingBoilerplate\FeatureEnvy\Trial\Employee;

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
            $salary = $salary + $this->calculateSalaryOfEmployee($employee);
        }
        return $salary;
    }

    private function calculateSalaryOfEmployee(Employee $employee): float
    {
        /**
         * This is an example of Feature envy.
         * A method accesses the data of another object more than its own data.
         */
        $totalHours = $employee->getWorkedHours();
        switch ($employee->getKindOfBranchOffice()) {
            case self::ELECTRICITY:
                $totalHours = $totalHours + 8;
                break;
            case self::GAS:
                $totalHours = $totalHours + 4;
                break;
            case self::WATER:
                $totalHours = $totalHours + 1;
                break;
        }
        return $employee->getPricePerHour() * $totalHours;
    }
}
