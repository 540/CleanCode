<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\OpenClosedPrinciple\Success;

use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Success\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Success\FrontEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Success\BackEndDeveloper;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    private BranchOffice $branchOffice;

    protected function setUp(): void
    {
        parent::setUp();

        $employee1 = new FrontEndDeveloper("Asier", 'login view');
        $employee2 = new BackEndDeveloper("Javier", 'login database');

        $this->branchOffice = new BranchOffice();
        $this->branchOffice->insertEmployee($employee1);
        $this->branchOffice->insertEmployee($employee2);
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $expectedData = 'Asier is developing login view || Javier is creating login database';
        $this->assertEquals($expectedData, $this->branchOffice->startWork());
    }
}
