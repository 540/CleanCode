<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\LiskovSubstitutionPrinciple\Success;

use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success\BackEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success\BranchOffice;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    private BranchOffice $branchOffice;

    protected function setUp(): void
    {
        parent::setUp();

        $backEndDeveloper = new BackEndDeveloper(
            'Javier',
            'javier@gmail.com',
            '+34 666 666 666',
            'password',
            ['login database']
        );

        $this->branchOffice = new BranchOffice();
        $this->branchOffice->insertDeveloper($backEndDeveloper);
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $expectedResponse = 'Name: Javier Email: javier@gmail.com Phone Number: +34 666 666 666' .
            ' Password: password Role: BackEndDeveloper';

        $this->assertEquals(
            $expectedResponse,
            $this->branchOffice->getDevelopersData()
        );
    }
}
