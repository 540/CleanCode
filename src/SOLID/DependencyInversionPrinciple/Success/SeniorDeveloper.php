<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Success;

class SeniorDeveloper implements Developer
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
        return $this->name . ' is a senior and there is no one better than him developing "' . $this->program . '"';
    }
}
