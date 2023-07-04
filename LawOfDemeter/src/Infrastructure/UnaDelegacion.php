<?php

namespace Infrastructure;

use LawOfDemeter\Domain\Delegacion;
use LawOfDemeter\Domain\Sucursal;

class UnaDelegacion implements Delegacion
{

    /**
     * @var Sucursal[]
     */
    private array $sucursales;

    public function __construct()
    {
        $this->sucursales = array();
    }

    /**
     * @return Sucursal[]
     */
    public function ObtenerSucursales(): array
    {
        return $this->sucursales;
    }

    public function InsertarSucursal(Sucursal $sucursal)
    {
        $this->sucursales[] = $sucursal;
    }

    public function ObtenerGastosSemanales(): float
    {
        $suma = 0.0;
        foreach ($this->sucursales as $sucursal)
        {
            foreach ($sucursal->ObtenerEmpleados() as $empleado)
            {
                $suma = $empleado->ObtenerPrecioHora() * $empleado->ObtenerPrecioHora();
            }
        }
        return $suma;
    }

    public function ObtenerNombreDelEmpleadoConMasSueldo(): string
    {
        $empleadoConMasPaga = null;
        $pagaMaxima = 0.0;
        foreach ($this->sucursales as $sucursal)
        {
            foreach ($sucursal->ObtenerEmpleados() as $empleado)
            {
                $pagaSemanal = $empleado->ObtenerPrecioHora() * $empleado->ObtenerPrecioHora();
                if ($pagaMaxima < $pagaSemanal)
                {
                    $empleadoConMasPaga = $empleado;
                }
            }
        }
        return $empleadoConMasPaga->ObtenerNombre();
    }
}
