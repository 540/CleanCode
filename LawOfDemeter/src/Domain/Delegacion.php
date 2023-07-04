<?php

namespace LawOfDemeter\Domain;

interface Delegacion
{
    /**
     * @return Sucursal[]
     */
    public function ObtenerSucursales(): array;

    public function InsertarSucursal(Sucursal $sucursal);

    public function ObtenerGastosSemanales(): float;

    public function ObtenerNombreDelEmpleadoConMasSueldo(): string;
}
