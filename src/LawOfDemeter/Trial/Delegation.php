<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Trial;

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

    public function insertBranchOffice(BranchOffice $branchOffice): void
    {
        $this->branchOffices[] = $branchOffice;
    }

    public function getWeeklyWaste(): float
    {
        //Fix the code necessary to pass the tests and comply with Demeter's Law.
        $amount = 0.0;
        for ($i = 0; $i < count($this->branchOffices); $i++) {
            foreach ($this->getBranchOffices()[$i]->getEmployees() as $employee) {
                $amount = $amount + $employee->calculateEmployeeExpense();
            }
        }

        return $amount;
    }

    public function getEmployeeNameWithMostSalary(): string
    {
        //Fix the code necessary to pass the tests and comply with Demeter's Law.
        $branchMoreExpensive = null;
        foreach ($this->branchOffices as $branchOffice) {
            if ($branchMoreExpensive == null) {
                $branchMoreExpensive = $branchOffice;
            }

            if (
                $branchOffice->getEmployeeMoreExpensive()->calculateEmployeeExpense() >
                $branchMoreExpensive->getEmployeeMoreExpensive()->calculateEmployeeExpense()
            ) {
                $branchMoreExpensive = $branchOffice;
            }
        }

        return $branchMoreExpensive->getNameOfmoreExpensiveWorker();
    }
}
