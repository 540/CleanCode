<?php

namespace Deg540\PHPTestingBoilerplate\Test\FeatureEnvy\Trial;

use Deg540\PHPTestingBoilerplate\FeatureEnvy\Trial\BranchOffice;
use Deg540\PHPTestingBoilerplate\FeatureEnvy\Trial\Employee;
use PHPUnit\Framework\TestCase;

final class FeatureEnvyTest extends TestCase
{
    /**
     * @test
     */
    public function getBranchOfficeWeekSalary(): void
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $employee1 = new Employee("Asier", 40, 30.5);
        $employee2 = new Employee("Javier", 20, 40.9);
        $employee3 = new Employee("Iker", 10, 100.0);

        $branchOffice = new BranchOffice(BranchOffice::WATER);
        $branchOffice->insertEmployee($employee1);
        $branchOffice->insertEmployee($employee2);
        $branchOffice->insertEmployee($employee3);

        $expectedPrice = 0.0;
        $this->assertEquals($expectedPrice, $branchOffice->calculateSalary());
    }
}
