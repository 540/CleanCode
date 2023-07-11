<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Infrastructure;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Domain\Empleado;

class UnEmpleado implements Empleado
{

    private string $nombre;
    private int $horasTrabajadas;
    private float $precioPorHora;

    /**
     * @param string $nombre
     * @param int $horasTrabajadas
     * @param float $precioPorHora
     */
    public function __construct(string $nombre, int $horasTrabajadas, float $precioPorHora)
    {
        $this->nombre = $nombre;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
    }

    public function ObtenerNombre(): string
    {
        return $this->nombre;
    }

    public function ObtenerHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    public function ObtenerPrecioHora(): float
    {
        return $this->precioPorHora;
    }

    public function CalcularGastoDelEmpleado(): float
    {
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    public function CobraMasQueEsteEmpleado(Empleado $empleado): bool
    {
        return $this->CalcularGastoDelEmpleado() > $empleado->CalcularGastoDelEmpleado();
    }
}
