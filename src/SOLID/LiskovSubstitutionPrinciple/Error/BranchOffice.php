<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\LiskovSubstitutionPrinciple\Error;

class BranchOffice
{
    /**
     * @var Developer[]
     */
    private array $developers;

    public function insertDevelopers(Developer $developer): void
    {
        $this->developers[] = $developer;
    }

    public function getDevelopersData(): string
    {
        $data = array_map(function ($developer) {
            return $developer->getAllData();
        }, $this->developers);

        return implode(' || ', $data);
    }
}
