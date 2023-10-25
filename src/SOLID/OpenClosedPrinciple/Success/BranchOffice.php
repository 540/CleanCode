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

    public function startSprint(): string
    {
        $workToDevelop = array_map(fn($employee) => $employee->develop(), $this->employees);

        return implode(' || ', $workToDevelop);
    }
}
