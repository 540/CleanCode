<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\LiskovSubstitutionPrinciple\Trial;

use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Trial\BackEndDeveloper;
use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Trial\BranchOffice;
use Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Trial\Developer;
use Exception;
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
    public function backEndDeveloperDontKnowToProgramInHTMLException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('I don´t know how to program in HTML and I refuse to learn.');

        $this->branchOffice->sendDevelopersToDevelopInHTML();
    }
}
