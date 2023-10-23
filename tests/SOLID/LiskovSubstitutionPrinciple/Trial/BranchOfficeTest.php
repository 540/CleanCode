<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\LiskovSubstitutionPrinciple\Trial;

use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Trial\BackEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Trial\BranchOffice;
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
