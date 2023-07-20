<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Success;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\BranchOffice;

class Delegation
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
        foreach ($this->branchOffices as $branchOffice) {
            $amount = $amount + $branchOffice->calculateWeeklyExpense();
        }
        return $amount;
    }

    public function getEmployeeNameWithMostSalary(): string
    {
        $branchMoreExpensive = null;
        foreach ($this->branchOffices as $branchOffice) {
            if ($branchMoreExpensive == null) {
                $branchMoreExpensive = $branchOffice;
            }

            if (!$branchMoreExpensive->chargeMoreThanThisEmployee($branchOffice->getEmployeeMoreExpensive())) {
                $branchMoreExpensive = $branchOffice;
            }
        }

        return $branchMoreExpensive->getNameOfmoreExpensiveWorker();
    }
}
