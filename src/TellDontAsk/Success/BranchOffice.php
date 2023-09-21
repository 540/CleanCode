<?php

namespace Deg540\PHPTestingBoilerplate\TellDontAsk\Success;

class BranchOffice
{
    /**
     * @var Employee[]
     */
    private array $employees;

    public function __construct()
    {
        $this->employees = array();
    }

    public function insertEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function getNamesOfEmployeesWithBigSalary(): string
    {
        $namesWithBigSalary = array();
        foreach ($this->employees as $employee) {
            /*
             * Now, we can use the method hasBigSalary in other parts of the code
             * We only have a form to calculate and if it changes, it changes for all
             */
            if ($employee->hasBigSalary()) {
                $namesWithBigSalary[] = $employee->getName();
            }
        }
        return implode(", ", $namesWithBigSalary);
    }
}
