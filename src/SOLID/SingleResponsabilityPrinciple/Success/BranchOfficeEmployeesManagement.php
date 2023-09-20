<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success;

class BranchOfficeEmployeesManagement
{
    private BranchOffice $branchOffice;
    private array $employees;

    public function __construct(BranchOffice $branchOffice)
    {
        $this->branchOffice = $branchOffice;
        $this->employees = $this->branchOffice->getEmployees();
    }

    public function getEmployeesData(): string
    {
        $employeeData = '';
        foreach ($this->employees as $employee) {
            if (!empty($employeeData)) {
                $employeeData .= ' || ';
            }
            $employeeData .= 'Name: ' . $employee->getName() . ', Salary: ' . $employee->calculateSalary();
        }

        return $employeeData;
    }
}
