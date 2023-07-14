<?php

namespace Deg540\PHPTestingBoilerplate\Test\DRY;

use Deg540\PHPTestingBoilerplate\DRY\Success\Administrator;
use PHPUnit\Framework\TestCase;

class AdministratorTests extends TestCase
{
    public Administrator $administrator;
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->administrator = new Administrator(
            'Iker',
            'iker.mariñelarena@540deg.com',
            '123456789',
            'soyIkerElAdmin',
            []
        );
    }

    /**
     * @test
     */
    public function getAllDataFromAdmin()
    {
        $data = $this->administrator->getAllData();
        
        $this->assertEquals('Name: Iker Email: iker.mariñelarena@540deg.com PhoneNumber: 123456789 Password: soyIkerElAdmin', $data);
    }

    /**
     * @test
     */
    public function noTasksToManage()
    {
        $tasks = $this->administrator->tasksToManage();
        
        $this->assertEquals('You have no tasks to manage', $tasks);
    }
}