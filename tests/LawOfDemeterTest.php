<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Infrastructure\UnaDelegacion;
use Infrastructure\UnaSucursal;
use Infrastructure\UnEmpleado;
use LawOfDemeter\Domain\Delegacion;
use PHPUnit\Framework\TestCase;

final class LawOfDemeterTest extends TestCase
{

    private Delegacion $delegacion;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();

        $empleado1 = new UnEmpleado("Asier", 40, 30.5);
        $empleado2 = new UnEmpleado("Javier", 20, 40.9);
        $empleado3 = new UnEmpleado("Iker", 10, 100.0);

        $sucursal1 = new UnaSucursal("Pamplona");
        $sucursal1->InsertarEmpleado($empleado1);
        $sucursal1->InsertarEmpleado($empleado2);

        $sucursal2 = new UnaSucursal("Olite");
        $sucursal2->InsertarEmpleado($empleado3);

        $this->delegacion = new UnaDelegacion();
        $this->delegacion->InsertarSucursal($sucursal1);
        $this->delegacion->InsertarSucursal($sucursal2);
    }

    /**
     * @test
     */
    public function ObtenerGastoPorSemanaDeLaDelegacion(): void
    {
        $precioEsperado = 3038.0;
        $this->assertEquals($precioEsperado, $this->delegacion->ObtenerGastosSemanales());
    }

    public function ObtenerElNombreDelEmpleadoQueMasHaCobradoEnLaSemana(): void
    {
        $nombreDelEmpleado = "Asier";
        $this->assertEquals($nombreDelEmpleado, $this->delegacion->ObtenerNombreDelEmpleadoConMasSueldo());

    }

}
