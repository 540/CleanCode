<?php

namespace Deg540\PHPTestingBoilerplate\Test\DRY;

use Deg540\PHPTestingBoilerplate\DRY\Success\Programmer;
use PHPUnit\Framework\TestCase;

class ProgrammerTests extends TestCase
{
    public Programmer $etxebe;
    public Programmer $asier;
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->etxebe = new Programmer(
            'Etxebe',
            'etxebe@saltoki.com',
        '987654321',
            'soyEtxebe',
            []
        );
        $this->asier = new Programmer(
            'Asier',
            'asier.alba@540deg.com',
        '192837465',
            'soyAsier',
            ['Fieldeas']
        );
    }

    /**
     * @test
     */
    public function getAllDataFromAdmin()
    {
        $dataEtxebe = $this->etxebe->getAllData();
        $dataAsier = $this->asier->getAllData();
        
        $this->assertEquals('Name: Etxebe Email: etxebe@saltoki.com PhoneNumber: 987654321 Password: soyEtxebe', $dataEtxebe);
        $this->assertEquals('Name: Asier Email: asier.alba@540deg.com PhoneNumber: 192837465 Password: soyAsier', $dataAsier);
    }

    /**
     * @test
     */
    public function noTasksToManage()
    {
        $tasksEtxebe = $this->etxebe->tasksToBeProgrammed();
        $tasksAsier = $this->asier->tasksToBeProgrammed();
        
        $this->assertEquals('You have no tasks to be programmed', $tasksEtxebe);
        $this->assertEquals('You have tasks to be programmed', $tasksAsier);
    }
}