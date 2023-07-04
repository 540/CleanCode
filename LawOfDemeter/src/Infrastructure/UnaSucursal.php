<?php

namespace Infrastructure;

use LawOfDemeter\Domain\Empleado;
use LawOfDemeter\Domain\Sucursal;

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
}
