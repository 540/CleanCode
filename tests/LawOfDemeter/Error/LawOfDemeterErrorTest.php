<?php

namespace Deg540\PHPTestingBoilerplate\Test\LawOfDemeter\Error;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Error\Delegation;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\BranchOffice;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Employee;
use PHPUnit\Framework\TestCase;

final class LawOfDemeterErrorTest extends TestCase
{
    private Delegation $delegation;

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

        $this->delegation = new Delegation();
        $this->delegation->insertBranchOffice($branchOffice1);
        $this->delegation->insertBranchOffice($branchOffice2);
    }

    /**
     * @test
     */
    public function getDelegationWeekExpense(): void
    {
        $expectedPrice = 3038.0;
        $this->assertEquals($expectedPrice, $this->delegation->getWeeklyWaste());
    }

    /**
     * @test
     */
    public function getTheNameOfTheMostPaidEmployeeInTheWeek(): void
    {
        $employeeName = "Asier";
        $this->assertEquals($employeeName, $this->delegation->getEmployeeNameWithMostSalary());
    }
}
