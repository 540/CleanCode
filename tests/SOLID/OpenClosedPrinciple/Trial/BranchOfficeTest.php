<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\OpenClosedPrinciple\Trial;

use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Trial\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Trial\FrontEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Trial\BackEndDeveloper;
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
        $this->branchOffice->insertFrontEndDeveloper($employee1);
        $this->branchOffice->insertBackEndDeveloper($employee2);
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
