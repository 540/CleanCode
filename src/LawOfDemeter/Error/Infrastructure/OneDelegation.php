<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Error\Infrastructure;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Domain\BranchOffice;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Domain\Delegation;

class OneDelegation implements Delegation
{
    /**
     * @var BranchOffice[]
     */
    private array $branchOffices;

    public function __construct()
    {
        $this->branchOffices = array();
    }

    /**
     * @return BranchOffice[]
     */
    public function getBranchOffices(): array
    {
        return $this->branchOffices;
    }

    public function insertBranchOffice(BranchOffice $branchOffice)
    {
        $this->branchOffices[] = $branchOffice;
    }

    public function getWeeklyWaste(): float
    {
        $amount = 0.0;
        for ($i = 0; $i < count($this->branchOffices); $i++)
        {
            foreach ($this->getBranchOffices()[$i]->getEmployees() as $employee) {
                $amount = $amount + $employee->calculateEmployeeExpense();
            }
        }
        
        return $amount;
    }

    public function getEmployeeNameWithMostSalary(): string
    {
        $branchOfficeWithMoreExpensiveEmployee = null;
        foreach ($this->branchOffices as $branchOffice)
        {
            if ($branchOfficeWithMoreExpensiveEmployee == null)
            {
                $branchOfficeWithMoreExpensiveEmployee = $branchOffice;
            }
            
            if (
                $branchOffice->getEmployeeMoreExpensive()->calculateEmployeeExpense() >
                $branchOfficeWithMoreExpensiveEmployee->getEmployeeMoreExpensive()->calculateEmployeeExpense()
            ) {
                $branchOfficeWithMoreExpensiveEmployee = $branchOffice;
            }
        }
        
        return $branchOfficeWithMoreExpensiveEmployee->getNameOfMoreExpensiveEmployee();
    }
}
