<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\SingleResponsabilityPrinciple\Success;

use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success\BranchOfficeWasteCalculator;
use Deg540\PHPTestingBoilerplate\SOLID\SingleResponsabilityPrinciple\Success\Employee;
use PHPUnit\Framework\TestCase;

class BranchOfficeWasteCalculatorTest extends TestCase
{
    private BranchOffice $branchOffice;
    private BranchOfficeWasteCalculator $wasteCalculator;

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

        $this->wasteCalculator = new BranchOfficeWasteCalculator($this->branchOffice);
    }

    /**
     * @test
     */
    public function getBranchOfficeWaste(): void
    {
        $expectedPrice = 3038;
        $this->assertEquals($expectedPrice, $this->wasteCalculator->calculateWasteOfEmployees());
    }
}
