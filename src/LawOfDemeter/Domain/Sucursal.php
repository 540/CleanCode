<?php

namespace Deg540\PHPTestingBoilerplate\LawOfDemeter\Domain;

interface Sucursal
{
    /**
     * @return Empleado[]
     */
    public function ObtenerEmpleados(): array;
    public function InsertarEmpleado(Empleado $empleado);
    public function ObtenerNombre():string;
    public function CalcularGastoSemanal():float;
    public function ObtenerEmpleadoMasCaro(): Empleado;
    public function CobraMasQueEsteEmpleado(Empleado $empleado): bool;
    public function ObtenerNombreDelEmpleadoMasCaro(): string;
}
