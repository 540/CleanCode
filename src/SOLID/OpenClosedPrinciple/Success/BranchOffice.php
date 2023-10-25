<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Success;

class BranchOffice
{
    /**
     * @var Employee[]
     */
    private array $employees;

    public function addEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function startCicle(): string
    {
        $data = array_map(function ($employee) {
            return $employee->develop();
        }, $this->employees);

        return implode(' || ', $data);
    }
}
