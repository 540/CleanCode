<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\OpenClosedPrinciple\Error;

class BranchOffice
{
    /**
     * @var FrontEndDeveloper[]
     */
    private array $frontEndDevelopers;

    /**
     * @var BackEndDeveloper[]
     */
    private array $backEndDevelopers;

    /*
     * We need one method for any kind of employees.
     */
    public function addFrontEndDeveloper(FrontEndDeveloper $frontEndDeveloper): void
    {
        $this->frontEndDevelopers[] = $frontEndDeveloper;
    }

    public function addBackEndDeveloper(BackEndDeveloper $backEndDeveloper): void
    {
        $this->backEndDevelopers[] = $backEndDeveloper;
    }

    public function startSprint(): string
    {
        $frontEndWork = array_map(fn($employee) => $employee->develop(), $this->frontEndDevelopers);
        $backEndWork = array_map(fn($employee) => $employee->develop(), $this->backEndDevelopers);

        return implode(' || ', array_merge($frontEndWork, $backEndWork));
    }
}
