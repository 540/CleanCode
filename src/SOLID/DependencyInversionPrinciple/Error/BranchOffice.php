<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Error;

class BranchOffice
{
    /**
     * @var JuniorDeveloper[]
     */
    private array $juniorDevelopers;

    /**
     * @var MidDeveloper[]
     */
    private array $midDevelopers;

    /**
     * @var SeniorDeveloper[]
     */
    private array $seniorDevelopers;

    /*
     * We need one method for any kind of employees.
     */
    public function addJuniorDeveloper(JuniorDeveloper $juniorDeveloper): void
    {
        $this->juniorDevelopers[] = $juniorDeveloper;
    }

    public function addMidDeveloper(MidDeveloper $midDeveloper): void
    {
        $this->midDevelopers[] = $midDeveloper;
    }

    public function addSeniorDeveloper(SeniorDeveloper $seniorDeveloper): void
    {
        $this->seniorDevelopers[] = $seniorDeveloper;
    }

    public function startSprint(): string
    {
        $juniorWork = array_map(fn($employee) => $employee->develop(), $this->juniorDevelopers);
        $midWork = array_map(fn($employee) => $employee->develop(), $this->midDevelopers);
        $seniorWork = array_map(fn($employee) => $employee->develop(), $this->seniorDevelopers);

        return implode(' || ', array_merge($juniorWork, $midWork, $seniorWork));
    }
}
