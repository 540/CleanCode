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
        $data = array_map(function ($employee) {
            return $employee->getData();
        }, $this->employees);

        return implode(' || ', $data);
    }
}
