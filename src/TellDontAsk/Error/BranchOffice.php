<?php

namespace Deg540\PHPTestingBoilerplate\TellDontAsk\Error;

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
             * We break the rule Tell, don't ask
             * We ask the employee for his worked hours and his price
             * We can extract this lines to a new method in employee and
             * use this new method in others methods.
            */
            if ($employee->getHourPrice() * $employee->getWorkedHours() > 750) {
                $namesWithBigSalary[] = $employee->getName();
            }
        }

        return implode(", ", $namesWithBigSalary);
    }
}
