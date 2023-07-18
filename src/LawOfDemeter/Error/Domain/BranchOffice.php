<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Error\Domain;

interface BranchOffice
{
    /**
     * @return Employee[]
     */
    public function getEmployees(): array;
    public function insertEmployee(Employee $employee);
    public function getName():string;
    public function calculateWeeklyExpense():float;
    public function getEmployeeMoreExpensive(): Employee;
    public function chargeMoreThanThisEmployee(Employee $employee): bool;
    public function getNameOfMoreExpensiveEmployee(): string;
}
