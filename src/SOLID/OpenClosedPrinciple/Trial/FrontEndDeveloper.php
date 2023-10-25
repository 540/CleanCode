<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Trial;

class FrontEndDeveloper
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
        return $this->name . ' is laying out ' . $this->program;
    }
}
