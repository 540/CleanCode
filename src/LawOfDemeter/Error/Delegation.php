<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Error;

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
        $amount = 0.0;
        for ($i = 0; $i < count($this->branchOffices); $i++) {
            //Here we are broking the Law of Demeter
            //You are accessing across multiple levels of objects
            foreach ($this->getBranchOffices()[$i]->getEmployees() as $employee) {
                $amount = $amount + $employee->calculateEmployeeExpense();
            }
        }

        return $amount;
    }

    public function getEmployeeNameWithMostSalary(): string
    {
        $branchMoreExpensive = null;
        for ($i = 0; $i < count($this->branchOffices); $i++) {
            if ($branchMoreExpensive == null) {
                $branchMoreExpensive = $this->branchOffices[$i];
            }

            //Here we are broking the Law of Demeter
            //You are accessing across multiple levels of objects
            if (
                $this->getBranchOffices()[$i]->getEmployeeMoreExpensive()->calculateEmployeeExpense() >
                $branchMoreExpensive->getEmployeeMoreExpensive()->calculateEmployeeExpense()
            ) {
                $branchMoreExpensive = $this->branchOffices[$i];
            }
        }

        return $branchMoreExpensive->getNameOfmoreExpensiveWorker();
    }
}
