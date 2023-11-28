<?php

namespace Deg540\PHPTestingBoilerplate\SOLID\DependencyInversionPrinciple\Success;

interface BranchOfficeDeveloper
{
    public function addDevelopers(Developer $developers): void;
    public function startSprint(): string;
}
