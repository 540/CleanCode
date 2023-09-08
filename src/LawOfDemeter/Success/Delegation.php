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

    public function insertBranchOffice(BranchOffice $branchOffice): void
    {
        $this->branchOffices[] = $branchOffice;
    }

    public function getWeeklyWaste(): float
    {
        $amount = 0.0;
        //Here we are following the Law of Demeter
        //We are accessing immediately to a class that is followed by this and we aren´t
        //accessing it through several levels.
        foreach ($this->branchOffices as $branchOffice) {
            $amount = $amount + $branchOffice->calculateWeeklyExpense();
        }
        return $amount;
    }

    public function getEmployeeNameWithBestSalary(): string
    {
        $branchMoreExpensive = null;
        //Here we are following the Law of Demeter
        //We are accessing immediately to a class that is followed by this and we aren´t
        //accessing it through several levels.
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
