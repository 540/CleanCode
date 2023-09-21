<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success;

class BranchOfficeWasteCalculator
{
    private BranchOffice $branchOffice;
    private array $employees;

    public function __construct(BranchOffice $branchOffice)
    {
        $this->branchOffice = $branchOffice;
        $this->employees = $this->branchOffice->getEmployees();
    }

    public function calculateWasteOfEmployees(): float
    {
        $totalWaste = 0.0;
        foreach ($this->employees as $employee) {
            $totalWaste += $employee->calculateSalary();
        }

        return $totalWaste;
    }
}
