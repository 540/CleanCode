<?php

namespace Deg540\PHPTestingBoilerplate\Test\DRY\Trial;

use Deg540\PHPTestingBoilerplate\DRY\Trial\Leader;
use PHPUnit\Framework\TestCase;

class LeaderTrialTest extends TestCase
{
    public Leader $leader;

    protected function setUp(): void
    {
        parent::setUp();

        $this->leader = new Leader(
            'Iker',
            'iker.mariñelarena@540deg.com',
            '123456789',
            'soyIkerElLeader',
            []
        );
    }

    /**
     * @test
     */
    public function getAllDataFromLeader()
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $data = $this->leader->getAllData();

        $this->assertEquals(
            'Name: Iker Email: iker.mariñelarena@540deg.com PhoneNumber: 123456789 Password: soyIkerElLeader',
            $data
        );
    }

    /**
     * @test
     */
    public function noTasksToLead()
    {
        $this->markTestSkipped('To be implemented to validate the trial');
        $tasks = $this->leader->tasksToLead();

        $this->assertEquals('You have no tasks to lead', $tasks);
    }
}
