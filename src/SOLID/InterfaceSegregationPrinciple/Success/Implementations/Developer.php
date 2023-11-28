<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Success\Implementations;

use Deg540\PHPTestingBoilerplate\SOLID\InterfaceSegregationPrinciple\Success\Interfaces\DeveloperInterface;
use Exception;

class Developer implements DeveloperInterface
{
    /**
     * @throws Exception
     */
    public function startWorkDay(string $startHour): void
    {
        throw new Exception('He empezado a trabajar a las ' . $startHour);
    }

    /**
     * @throws Exception
     */
    public function finishWorkDay(string $finishHour): void
    {
        throw new Exception('He terminado de trabajar a las ' . $finishHour);
    }

    /**
     * @throws Exception
     */
    public function develop(): void
    {
        throw new Exception('Estoy programando :)');
    }
}
