<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\LiskovSubstitutionPrinciple\Error;

use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Error\BackEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Error\BranchOffice;
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
        $this->branchOffice->insertDevelopers($backEndDeveloper);
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $this->assertEquals(
            'Name: Javier Email: javier@gmail.com Phone Number: +34 666 666 666' .
            ' Password: password Role: BackEndDeveloper',
            $this->branchOffice->getDevelopersData()
        );
    }
}
