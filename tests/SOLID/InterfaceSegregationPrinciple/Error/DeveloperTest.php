<?php

namespace Deg540\PHPTestingBoilerplate\Test\SOLID\InterfaceSegregationPrinciple\Error;

use Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Error\Developer;
use Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Error\ThisIsNotMyJobException;
use Exception;
use PHPUnit\Framework\TestCase;

class DeveloperTest extends TestCase
{
    private Developer $developer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->developer = new Developer();
    }

    /**
     * @test
     */
    public function startWorkDaySuccessfully(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('He empezado a trabajar a las 9:00');

        $this->developer->startWorkDay('9:00');
    }

    /**
     * @test
     */
    public function finishWorkDaySuccessfully(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('He terminado de trabajar a las 21:00');

        $this->developer->finishWorkDay('21:00');
    }

    /**
     * @test
     */
    public function developSuccessfully(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Estoy programando :)');

        $this->developer->develop();
    }

    /**
     * @test
     */
    public function thisIsNotMyJob(): void
    {
        $this->expectException(ThisIsNotMyJobException::class);
        $this->expectExceptionMessage('😠 Este no es mi trabajo 😠');

        $this->developer->manageEmployees();
    }
}
