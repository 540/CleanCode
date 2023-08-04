<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared;

class BranchOffice
{
    private string $name;

    /**
     * @var Employee[]
     */
    private array $employees;

    /**
     * @param string $name
     */

    public function __construct(string $name)
    {
        $this->employees = array();
        $this->name = $name;
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
        $this->employees[] = $employee;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function calculateWeeklyExpense(): float
    {
        $amount = 0.0;
        foreach ($this->employees as $employee) {
            $amount = $amount + $employee->calculateEmployeeExpense();
        }
        return $amount;
    }

    public function getEmployeeMoreExpensive(): Employee
    {
        $moreExpensiveWorker = null;
        foreach ($this->employees as $employee) {
            if ($moreExpensiveWorker == null) {
                $moreExpensiveWorker = $employee;
                continue;
            }

            if ($moreExpensiveWorker->calculateEmployeeExpense() < $employee->calculateEmployeeExpense()) {
                $moreExpensiveWorker = $employee;
            }
        }
        return $moreExpensiveWorker;
    }

    public function chargeMoreThanThisEmployee(Employee $employee): bool
    {
        return $this->getEmployeeMoreExpensive()->calculateEmployeeExpense() > $employee->calculateEmployeeExpense();
    }

    public function getNameOfmoreExpensiveWorker(): string
    {
        return $this->getEmployeeMoreExpensive()->getName();
    }
}
