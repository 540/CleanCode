<?php

namespace Deg540\PHPTestingBoilerplate\Test\DRY\Trial;

use Deg540\PHPTestingBoilerplate\DRY\Trial\Developer;
use PHPUnit\Framework\TestCase;

class DeveloperTrialTest extends TestCase
{
    public Developer $etxebe;
    public Developer $asier;

    protected function setUp(): void
    {
        parent::setUp();

        $this->etxebe = new Developer(
            'Etxebe',
            'etxebe@saltoki.com',
            '987654321',
            'soyEtxebe',
            []
        );
        $this->asier = new Developer(
            'Asier',
            'asier.alba@540deg.com',
            '192837465',
            'soyAsier',
            ['CleanCodeRepo']
        );
    }

    /**
     * @test
     */
    public function getAllDataFromDevelopers()
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $dataEtxebe = $this->etxebe->getAllData();
        $dataAsier = $this->asier->getAllData();

        $this->assertEquals(
            'Name: Etxebe Email: etxebe@saltoki.com PhoneNumber: 987654321 Password: soyEtxebe',
            $dataEtxebe
        );
        $this->assertEquals(
            'Name: Asier Email: asier.alba@540deg.com PhoneNumber: 192837465 Password: soyAsier',
            $dataAsier
        );
    }

    /**
     * @test
     */
    public function noTasksToDevelop()
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $tasksEtxebe = $this->etxebe->tasksToDevelop();
        $tasksAsier = $this->asier->tasksToDevelop();

        $this->assertEquals('You have no tasks to develop', $tasksEtxebe);
        $this->assertEquals('You have tasks to develop', $tasksAsier);
    }
}
