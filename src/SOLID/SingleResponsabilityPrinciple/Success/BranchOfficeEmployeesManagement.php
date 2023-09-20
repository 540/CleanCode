<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success;

class BranchOfficeEmployeesManagement
{
    /**
     * @var Employee[]
     */
    private array $employees;

    public function __construct(BranchOffice $branchOffice)
    {
        $this->employees = $branchOffice->getEmployees();
    }

    public function getEmployeesData(): string
    {
        $employeeData = '';
        foreach ($this->employees as $employee) {
            if (!empty($employeeData)) {
                $employeeData .= ' || ';
            }
            $employeeData .= $employee->getData();
        }

        return $employeeData;
    }
}
