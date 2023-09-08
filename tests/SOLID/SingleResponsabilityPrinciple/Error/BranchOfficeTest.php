<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\SingleResponsabilityPrinciple\Error;

use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Error\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Error\Employee;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    /**
     * @test
     */
    public function getBranchOfficeWaste(): void
    {
        $employee1 = new Employee("Asier", 40, 30.5);
        $employee2 = new Employee("Javier", 20, 40.9);
        $employee3 = new Employee("Iker", 10, 100.0);

        $branchOffice = new BranchOffice();
        $branchOffice->insertEmployee($employee1);
        $branchOffice->insertEmployee($employee2);
        $branchOffice->insertEmployee($employee3);

        $expectedPrice = 3038;
        $this->assertEquals($expectedPrice, $branchOffice->calculateWasteOfEmployees());
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $employee1 = new Employee("Asier", 40, 30.5);
        $employee2 = new Employee("Javier", 20, 40.9);
        $employee3 = new Employee("Iker", 10, 100.0);
        $employee4 = new Employee("Fieldeas Developer", 1000, 1.0);

        $branchOffice = new BranchOffice();
        $branchOffice->insertEmployee($employee1);
        $branchOffice->insertEmployee($employee2);
        $branchOffice->insertEmployee($employee3);
        $branchOffice->insertEmployee($employee4);
        $branchOffice->removeEmployee($employee4);

        $expectedData = 'Name: Asier, Salary: 1220 || Name: Javier, Salary: 818 || Name: Iker, Salary: 1000';
        $this->assertEquals($expectedData, $branchOffice->getEmployeesData());
    }
}
