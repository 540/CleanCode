<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\SingleResponsabilityPrinciple\Trial;

use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Trial\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Trial\Employee;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    private BranchOffice $branchOffice;

    protected function setUp(): void
    {
        parent::setUp();

        $employee1 = new Employee("Asier", 40, 30.5);
        $employee2 = new Employee("Javier", 20, 40.9);
        $employee3 = new Employee("Iker", 10, 100.0);
        $employee4 = new Employee("Fieldeas Developer", 1000, 1.0);

        $this->branchOffice = new BranchOffice();
        $this->branchOffice->insertEmployee($employee1);
        $this->branchOffice->insertEmployee($employee2);
        $this->branchOffice->insertEmployee($employee3);
        $this->branchOffice->insertEmployee($employee4);
        $this->branchOffice->removeEmployee($employee4);
    }
    /**
     * @test
     */
    public function getBranchOfficeWaste(): void
    {
        $expectedPrice = 3038;
        $this->assertEquals($expectedPrice, $this->branchOffice->calculateWasteOfEmployees());
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $expectedData = 'Name: Asier, Salary: 1220 || Name: Javier, Salary: 818 || Name: Iker, Salary: 1000';
        $this->assertEquals($expectedData, $this->branchOffice->getEmployeesData());
    }
}
