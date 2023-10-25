<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\OpenClosedPrinciple\Error;

use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Error\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Error\FrontEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Error\BackEndDeveloper;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    private BranchOffice $branchOffice;

    protected function setUp(): void
    {
        parent::setUp();

        $employee1 = new FrontEndDeveloper('Asier', 'login view');
        $employee2 = new BackEndDeveloper('Javier', 'login database');

        $this->branchOffice = new BranchOffice();
        $this->branchOffice->addFrontEndDeveloper($employee1);
        $this->branchOffice->addBackEndDeveloper($employee2);
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $this->assertEquals(
            'Asier is laying out login view || Javier is implementing login database',
            $this->branchOffice->startSprint()
        );
    }
}
