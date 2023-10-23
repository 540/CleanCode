<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Error;

class BackEndDeveloper
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
