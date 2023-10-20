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
    public function insertFrontEndDeveloper(FrontEndDeveloper $frontEndDeveloper): void
    {
        $this->frontEndDevelopers[] = $frontEndDeveloper;
    }

    public function insertBackEndDeveloper(BackEndDeveloper $backEndDeveloper): void
    {
        $this->backEndDevelopers[] = $backEndDeveloper;
    }

    public function startWork(): string
    {
        $frontEndWork = array_map(function ($employee) {
            return $employee->doWork();
        }, $this->frontEndDevelopers);

        $backEndWork = array_map(function ($employee) {
            return $employee->doWork();
        }, $this->backEndDevelopers);

        return implode(' || ', array_merge($frontEndWork, $backEndWork));
    }
}
