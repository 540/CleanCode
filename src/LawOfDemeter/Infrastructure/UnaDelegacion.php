<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Infrastructure;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Domain\Delegacion;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Domain\Sucursal;

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
            $suma = $suma + $sucursal->CalcularGastoSemanal();
        }
        return $suma;
    }

    public function ObtenerNombreDelEmpleadoConMasSueldo(): string
    {
        $sucursalConEmpleadoMasCaro = null;
        foreach ($this->sucursales as $sucursal)
        {
            if ($sucursalConEmpleadoMasCaro == null)
            {
                $sucursalConEmpleadoMasCaro = $sucursal;
            }

            if (!$sucursalConEmpleadoMasCaro->CobraMasQueEsteEmpleado($sucursal->ObtenerEmpleadoMasCaro()))
            {
                $sucursalConEmpleadoMasCaro = $sucursal;
            }
        }

        return $sucursalConEmpleadoMasCaro->ObtenerNombreDelEmpleadoMasCaro();
    }
}