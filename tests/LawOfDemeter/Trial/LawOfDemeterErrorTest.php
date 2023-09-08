<?php

namespace Deg540\PHPTestingBoilerplate\Test\LawOfDemeter\Trial;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\BranchOffice;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Employee;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Trial\Delegation;
use PHPUnit\Framework\TestCase;

final class LawOfDemeterErrorTest extends TestCase
{
    private Delegation $delegacion;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();

        $employee1 = new Employee("Asier", 40, 30.5);
        $employee2 = new Employee("Javier", 20, 40.9);
        $employee3 = new Employee("Iker", 10, 100.0);

        $branchOffice1 = new BranchOffice("Pamplona");
        $branchOffice1->insertEmployee($employee1);
        $branchOffice1->insertEmployee($employee2);

        $branchOffice2 = new BranchOffice("Olite");
        $branchOffice2->insertEmployee($employee3);

        $this->delegacion = new Delegation();
        $this->delegacion->insertBranchOffice($branchOffice1);
        $this->delegacion->insertBranchOffice($branchOffice2);
    }

    /**
     * @test
     */
    public function getDelegationWeekExpense(): void
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $expectedPrice = 0.0;
        $this->assertEquals($expectedPrice, $this->delegacion->getWeeklyWaste());
    }

    /**
     * @test
     */
    public function getTheNameOfTheMostPaidEmployeeInTheWeek(): void
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $employeeName = "";
        $this->assertEquals($employeeName, $this->delegacion->getEmployeeNameWithMostSalary());
    }
}
