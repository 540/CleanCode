<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Domain;

interface Empleado
{
    public function ObtenerNombre(): string;
    public function ObtenerHorasTrabajadas(): int;
    public function ObtenerPrecioHora(): float;
    public function CalcularGastoDelEmpleado(): float;
    public function CobraMasQueEsteEmpleado(Empleado $empleado): bool;
}