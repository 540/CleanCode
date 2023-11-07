<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Success;

class BranchOffice
{
    /**
     * @var Developer[]
     */
    private array $developers;

    public function addDeveloper(Developer $developer): void
    {
        $this->developers[] = $developer;
    }

    public function sendDevelopersToDevelopInHTML(): string
    {
        $response = array_map(fn($developer) => $developer->developInHTML(), $this->developers);

        return implode(' || ', $response);
    }
}
