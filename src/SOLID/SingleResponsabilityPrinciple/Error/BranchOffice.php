<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Error;

class BranchOffice
{
    /**
     * @var Employee[]
     */
    private array $employees;

    public function insertEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function removeEmployee(Employee $employee): void
    {
        foreach ($this->employees as $key => $employeeInArray) {
            if ($employeeInArray->getName() === $employee->getName()) {
                unset($this->employees[$key]);
            }
        }
    }

    // In this class we have several responsibilities
    public function getEmployeesData(): string
    {
        $data = array_map(function ($employee) {
            return $employee->getData();
        }, $this->employees);

        return implode(' || ', $data);
    }

    public function calculateWasteOfEmployees(): float
    {
        $totalWaste = 0.0;
        foreach ($this->employees as $employee) {
            $totalWaste += $employee->calculateSalary();
        }

        return $totalWaste;
    }
}
