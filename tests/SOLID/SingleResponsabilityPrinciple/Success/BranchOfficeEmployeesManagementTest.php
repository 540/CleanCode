<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\SingleResponsabilityPrinciple\Success;

use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success\BranchOfficeEmployeesManagement;
use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success\Employee;
use PHPUnit\Framework\TestCase;

class BranchOfficeEmployeesManagementTest extends TestCase
{
    private BranchOffice $branchOffice;
    private BranchOfficeEmployeesManagement $officeEmployeesManag;

    protected function setUp(): void
    {
        parent::setUp();

        $employee1 = new Employee("Asier", 40, 30.5);
        $employee2 = new Employee("Javier", 20, 40.9);
        $employee3 = new Employee("Iker", 10, 100.0);
        $employee4 = new Employee("Fieldeas Developer", 1000, 1.0);

        $this->branchOffice = new BranchOffice([]);
        $this->branchOffice->insertEmployee($employee1);
        $this->branchOffice->insertEmployee($employee2);
        $this->branchOffice->insertEmployee($employee3);
        $this->branchOffice->insertEmployee($employee4);
        $this->branchOffice->removeEmployee($employee4);

        $this->officeEmployeesManag = new BranchOfficeEmployeesManagement($this->branchOffice);
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $expectedData = 'Name: Asier, Salary: 1220 || Name: Javier, Salary: 818 || Name: Iker, Salary: 1000';
        $this->assertEquals($expectedData, $this->officeEmployeesManag->getEmployeesData());
    }
}
