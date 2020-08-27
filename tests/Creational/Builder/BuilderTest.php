<?php


namespace Creational\Builder;

use App\Creational\Builder\CarBuilder;

use App\Creational\Builder\Director;

use App\Creational\Builder\Parts\Car;

use App\Creational\Builder\Parts\Truck;

use App\Creational\Builder\TruckBuilder;

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    /**
     * @test
     */
    public function test_can_build_truck()
    {

        $truckBuilder = new TruckBuilder();

        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    /**
     * @test
     */
    public function test_can_build_car()
    {

        $carBuilder = new CarBuilder();

        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);

    }


}