<?php

namespace Deg540\PHPTestingBoilerplate\Test\LawOfDemeter\Success;

use Deg540\PHPTestingBoilerplate\LawOfDemeter\Error\Infrastructure\OneDelegation;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Domain\Delegation;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Infrastructure\OneBranchOffice;
use Deg540\PHPTestingBoilerplate\LawOfDemeter\Shared\Infrastructure\OneEmployee;
use PHPUnit\Framework\TestCase;

final class LawOfDemeterTest extends TestCase
{

    private Delegation $delegacion;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();

        $empleado1 = new OneEmployee("Asier", 40, 30.5);
        $empleado2 = new OneEmployee("Javier", 20, 40.9);
        $empleado3 = new OneEmployee("Iker", 10, 100.0);

        $sucursal1 = new OneBranchOffice("Pamplona");
        $sucursal1->insertEmployee($empleado1);
        $sucursal1->insertEmployee($empleado2);

        $sucursal2 = new OneBranchOffice("Olite");
        $sucursal2->insertEmployee($empleado3);

        $this->delegacion = new OneDelegation();
        $this->delegacion->insertBranchOffice($sucursal1);
        $this->delegacion->insertBranchOffice($sucursal2);
    }

    /**
     * @test
     */
    public function ObtenerGastoPorSemanaDeLaDelegacion(): void
    {
        $precioEsperado = 3038.0;
        $this->assertEquals($precioEsperado, $this->delegacion->getWeeklyWaste());
    }

    /**
     * @test
     */
    public function ObtenerElNombreDelEmpleadoQueMasHaCobradoEnLaSemana(): void
    {
        $nombreDelEmpleado = "Asier";
        $this->assertEquals($nombreDelEmpleado, $this->delegacion->getEmployeeNameWithMostSalary());
    }

}
