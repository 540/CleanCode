<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Success;

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

    public function startWork(): string
    {
        $data = array_map(function ($employee) {
            return $employee->doWork();
        }, $this->employees);

        return implode(' || ', $data);
    }
}
