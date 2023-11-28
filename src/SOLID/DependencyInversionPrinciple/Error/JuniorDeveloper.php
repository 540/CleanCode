<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Error;

class JuniorDeveloper
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
        return $this->name . ' is a junior and is gradually developing "' . $this->program . '"';
    }
}
