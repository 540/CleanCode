<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Domain;

interface BranchOffice
{
    /**
     * @return Employee
     */
    public function getEmployees(): Employee;
    public function insertEmployee(Employee $employee);
    public function getName():string;
    public function calculateWeeklyExpense():float;
    public function getEmployeeMoreExpensive(): Employee;
    public function chargeMoreThanThisEmployee(Employee $employee): bool;
    public function getNameOfMoreExpensiveEmployee(): string;
}
