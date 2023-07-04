<?php

namespace LawOfDemeter\Domain;

interface Empleado
{
    public function ObtenerNombre(): string;
    public function ObtenerHorasTrabajadas(): int;
    public function ObtenerPrecioHora(): float;
}
