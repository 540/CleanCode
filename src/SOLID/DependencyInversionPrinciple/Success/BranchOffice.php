<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Success;

class BranchOffice
{
    /**
     * @var Developer[]
     */
    private array $developers;

    /*
     * We need one method for any kind of employees.
     */
    public function addDevelopers(Developer $developers): void
    {
        $this->developers[] = $developers;
    }

    public function startWork(): string
    {
        $developersWork = array_map(fn($employee) => $employee->develop(), $this->developers);

        return implode(' || ', $developersWork);
    }
}
