<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success;

class BranchOffice
{
    /**
     * @var Employee[]
     */
    private array $employees;

    /**
     * @param Employee[] $employees
     */
    public function __construct(array $employees)
    {
        $this->employees = $employees;
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }

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
}
