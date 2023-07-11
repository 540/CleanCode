<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Infrastructure;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Domain\Empleado;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Domain\Sucursal;

class UnaSucursal implements Sucursal
{

    private string $nombre;

    /**
     * @var Empleado[]
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
     * @return Empleado[]
     */
    public function ObtenerEmpleados(): array
    {
        return $this->empleados;
    }

    public function InsertarEmpleado(Empleado $empleado)
    {
        $this->empleados[] = $empleado;
    }

    public function ObtenerNombre(): string
    {
        return $this->nombre;
    }

    public function CalcularGastoSemanal(): float
    {
        $suma = 0.0;
        foreach ($this->empleados as $empleado)
        {
            $suma = $suma + $empleado->CalcularGastoDelEmpleado();
        }
        return $suma;
    }

    public function ObtenerEmpleadoMasCaro(): Empleado
    {
        $empleadoConMasPaga = null;
        foreach ($this->empleados as $empleado)
        {
            if ($empleadoConMasPaga == null)
            {
                $empleadoConMasPaga = $empleado;
                continue;
            }

            if (!$empleadoConMasPaga->CobraMasQueEsteEmpleado($empleado))
            {
                $empleadoConMasPaga = $empleado;
            }
        }
        return $empleadoConMasPaga;
    }
}
