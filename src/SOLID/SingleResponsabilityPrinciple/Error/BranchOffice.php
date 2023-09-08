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

    public function getEmployeesData(): string
    {
        $employeeData = '';
        foreach ($this->employees as $employee) {
            if (!empty($employeeData)) {
                $employeeData .= ' || ';
            }
            $employeeData .= 'Name: ' . $employee->getName() . ', Salary: ' . $employee->calculateSalary();
        }

        return $employeeData;
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
