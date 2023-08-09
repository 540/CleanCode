<?php

namespace Deg540\PHPTestingBoilerplate\Test\DRY\Success;

use Deg540\PHPTestingBoilerplate\DRY\Success\Developer;
use PHPUnit\Framework\TestCase;

class DeveloperSuccessTest extends TestCase
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
        $tasksEtxebe = $this->etxebe->tasksToBeProgrammed();
        $tasksAsier = $this->asier->tasksToBeProgrammed();

        $this->assertEquals('You have no tasks to develop', $tasksEtxebe);
        $this->assertEquals('You have tasks to develop', $tasksAsier);
    }
}
