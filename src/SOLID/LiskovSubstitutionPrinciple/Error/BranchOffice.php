<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Error;

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
        $data = array_map(function ($developer) {
            return $developer->developInHTML();
        }, $this->developers);

        return implode(' || ', $data);
    }
}
