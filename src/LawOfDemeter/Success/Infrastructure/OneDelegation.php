<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Infrastructure;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Domain\BranchOffice;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Domain\Delegation;

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
        foreach ($this->branchOffices as $branchOffice)
        {
            $amount = $amount + $branchOffice->calculateWeeklyExpense();
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

            if (!$branchOfficeWithMoreExpensiveEmployee->chargeMoreThanThisEmployee($branchOffice->getEmployeeMoreExpensive()))
            {
                $branchOfficeWithMoreExpensiveEmployee = $branchOffice;
            }
        }

        return $branchOfficeWithMoreExpensiveEmployee->getNameOfMoreExpensiveEmployee();
    }
}
