<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\DependencyInversionPrinciple\Error;

use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Error\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Error\JuniorDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Error\MidDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Error\SeniorDeveloper;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    private BranchOffice $branchOffice;

    protected function setUp(): void
    {
        parent::setUp();

        $juniorDeveloper = new JuniorDeveloper('Asier', 'login view');
        $midDeveloper = new MidDeveloper('Javier', 'login database');
        $seniorDeveloper = new SeniorDeveloper('Iker', 'login Architecture');

        $this->branchOffice = new BranchOffice();
        $this->branchOffice->addJuniorDeveloper($juniorDeveloper);
        $this->branchOffice->addMidDeveloper($midDeveloper);
        $this->branchOffice->addSeniorDeveloper($seniorDeveloper);
    }

    /**
     * @test
     */
    public function getBranchOfficeEmployeesData(): void
    {
        $expectedResponse = 'Asier is a junior and is gradually developing login view ||' .
            ' Javier is mid, has improved a lot and is developing login database ||' .
            ' Iker is a senior and there is no one better than him developing login Architecture';

        $this->assertEquals(
            $expectedResponse,
            $this->branchOffice->startWork()
        );
    }
}
