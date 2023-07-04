<?php

namespace LawOfDemeter\Domain;

interface Sucursal
{
    /**
     * @return Empleado[]
     */
    public function ObtenerEmpleados(): array;
    public function InsertarEmpleado(Empleado $empleado);
    public function ObtenerNombre():string;
}
