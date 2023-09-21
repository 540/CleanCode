<?php

namespace Deg540\PHPTestingBoilerplate\TellDontAsk\Trial;

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
            // Try to fix it ;)
            if ($employee->getHourPrice() * $employee->getWorkedHours() > 750) {
                $namesWithBigSalary[] = $employee->getName();
            }
        }

        return implode(", ", $namesWithBigSalary);
    }
}
