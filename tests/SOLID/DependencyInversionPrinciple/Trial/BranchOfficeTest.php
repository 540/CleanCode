<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\DependencyInversionPrinciple\Trial;

use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Trial\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Trial\JuniorDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Trial\MidDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Trial\SeniorDeveloper;
use PHPUnit\Framework\TestCase;

class BranchOfficeTest extends TestCase
{
    private BranchOffice $branchOffice;

    protected function setUp(): void
    {
        parent::setUp();

        $juniorDeveloper = new JuniorDeveloper('Asier', 'Login view');
        $midDeveloper = new MidDeveloper('Javier', 'Login database');
        $seniorDeveloper = new SeniorDeveloper('Iker', 'Login Architecture');

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
        $expectedResponse = 'Asier is a junior and is gradually developing "Login view" ||' .
            ' Javier is mid, has improved a lot and is developing "Login database" ||' .
            ' Iker is a senior and there is no one better than him developing "Login Architecture"';

        $this->assertEquals(
            $expectedResponse,
            $this->branchOffice->startSprint()
        );
    }
}
