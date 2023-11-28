<?php

namespace Deg540\PHPTestingBoilerplate\Test\TellDontAsk\Trial;

use Deg540\PHPTestingBoilerplate\TellDontAsk\Trial\BranchOffice;
use Deg540\PHPTestingBoilerplate\TellDontAsk\Trial\Employee;
use PHPUnit\Framework\TestCase;

final class TellDontAskErrorTest extends TestCase
{
    private BranchOffice $branchOffice;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();

        $employee1 = new Employee("Asier", 40, 30.5);
        $employee2 = new Employee("Javier", 10, 40.9);
        $employee3 = new Employee("Iker", 10, 100.0);

        $this->branchOffice = new BranchOffice();
        $this->branchOffice->insertEmployee($employee1);
        $this->branchOffice->insertEmployee($employee2);
        $this->branchOffice->insertEmployee($employee3);
    }

    /**
     * @test
     */
    public function getNamesOfEmployeesWithBigSalary(): void
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $expectedNames = "Asier, Iker";
        $this->assertEquals($expectedNames, $this->branchOffice->getNamesOfEmployeesWithBigSalary());
    }
}
