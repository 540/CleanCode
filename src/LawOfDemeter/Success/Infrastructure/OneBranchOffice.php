<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Infrastructure;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Domain\BranchOffice;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Success\Domain\Employee;

class OneBranchOffice implements BranchOffice
{

    private string $nombre;

    /**
     * @var Employee[]
     */
    private array $empleados;

    /**
     * @param string $nombre
     */

    public function __construct(string $nombre)
    {
        $this->empleados = array();
        $this->nombre = $nombre;
    }

    /**
     * @return Employee[]
     */
    public function getEmployees(): array
    {
        return $this->empleados;
    }

    public function insertEmployee(Employee $employee)
    {
        $this->empleados[] = $employee;
    }

    public function getName(): string
    {
        return $this->nombre;
    }

    public function calculateWeeklyExpense(): float
    {
        $suma = 0.0;
        foreach ($this->empleados as $empleado)
        {
            $suma = $suma + $empleado->calculateEmployeeExpense();
        }
        return $suma;
    }

    public function getEmployeeMoreExpensive(): Employee
    {
        $empleadoConMasPaga = null;
        foreach ($this->empleados as $empleado)
        {
            if ($empleadoConMasPaga == null)
            {
                $empleadoConMasPaga = $empleado;
                continue;
            }

            if ($empleadoConMasPaga->calculateEmployeeExpense() < $empleado->calculateEmployeeExpense())
            {
                $empleadoConMasPaga = $empleado;
            }
        }
        return $empleadoConMasPaga;
    }

    public function chargeMoreThanThisEmployee(Employee $empleado): bool
    {
        return $this->getEmployeeMoreExpensive()->calculateEmployeeExpense() > $empleado->calculateEmployeeExpense();
    }

    public function getNameOfMoreExpensiveEmployee(): string
    {
        return $this->getEmployeeMoreExpensive()->getName();
    }
}
