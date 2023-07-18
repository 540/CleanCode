<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Domain;

interface Delegation
{
    /**
     * @return BranchOffice[]
     */
    public function getBranchOffices(): array;

    public function insertBranchOffice(BranchOffice $branchOffice);

    public function getWeeklyWaste(): float;

    public function getEmployeeNameWithMostSalary(): string;
}
