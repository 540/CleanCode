<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\LiskovSubstitutionPrinciple\Success;

use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success\BackEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success\Developer;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    private BranchOffice $branchOffice;

    protected function setUp(): void
    {
        parent::setUp();

        $developer = new Developer(
            'Asier',
            'asier.alba@540deg.com',
            '+34 666 666 666',
            'password'
        );

        $backEndDeveloper = new BackEndDeveloper(
            'Javier',
            'javier@540deg.com',
            '+34 666 666 666',
            'password'
        );

        $this->branchOffice = new BranchOffice();
        $this->branchOffice->addDeveloper($developer);
        $this->branchOffice->addDeveloper($backEndDeveloper);
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $expectedResponse = 'I´m Name: Asier and i´m developing a HTML login ||' .
            ' I don´t know how to program in HTML and I refuse to learn.';

        $this->assertEquals(
            $expectedResponse,
            $this->branchOffice->sendDevelopersToDevelopInHTML()
        );
    }
}
