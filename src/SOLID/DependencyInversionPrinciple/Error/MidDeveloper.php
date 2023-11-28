<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Error;

class MidDeveloper
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
        return $this->name . ' is mid, has improved a lot and is developing "' . $this->program . '"';
    }
}
