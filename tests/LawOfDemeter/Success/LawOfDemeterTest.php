<?php

namespace Deg540\PHPTestingBoilerplate\Test\LawOfDemeter\Success;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Error\Infrastructure\OneDelegation;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Domain\Delegation;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Infrastructure\OneBranchOffice;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Infrastructure\OneEmployee;
use PHPUnit\Framework\TestCase;

final class LawOfDemeterTest extends TestCase
{

    private Delegation $delegation;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();

        $employee1 = new OneEmployee("Asier", 40, 30.5);
        $employee2 = new OneEmployee("Javier", 20, 40.9);
        $employee3 = new OneEmployee("Iker", 10, 100.0);

        $branchOffice1 = new OneBranchOffice("Pamplona");
        $branchOffice1->insertEmployee($employee1);
        $branchOffice1->insertEmployee($employee2);

        $branchOffice2 = new OneBranchOffice("Olite");
        $branchOffice2->insertEmployee($employee3);

        $this->delegation = new OneDelegation();
        $this->delegation->insertBranchOffice($branchOffice1);
        $this->delegation->insertBranchOffice($branchOffice2);
    }

    /**
     * @test
     */
    public function GetDelegationWeekExpense(): void
    {
        $expectedPrice = 3038.0;
        $this->assertEquals($expectedPrice, $this->delegation->getWeeklyWaste());
    }

    /**
     * @test
     */
    public function GetTheNameOfTheMostPaidEmployeeInTheWeek(): void
    {
        $employeeName = "Asier";
        $this->assertEquals($employeeName, $this->delegation->getEmployeeNameWithMostSalary());
    }

}
