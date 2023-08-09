<?php

namespace Deg540\PHPTestingBoilerplate\Test\DRY\Success;

use Deg540\PHPTestingBoilerplate\DRY\Success\Leader;
use PHPUnit\Framework\TestCase;

class LeaderSuccessTest extends TestCase
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
        $tasks = $this->leader->tasksToLead();

        $this->assertEquals('You have no tasks to lead', $tasks);
    }
}
