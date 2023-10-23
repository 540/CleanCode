<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Success;

class BackEndDeveloper implements Employee
{
    private string $name;
    private string $program;

    public function __construct(string $name, string $program)
    {
        $this->name = $name;
        $this->program = $program;
    }

    public function develop(): string
    {
        return $this->name . ' is implementing ' . $this->program;
    }
}
