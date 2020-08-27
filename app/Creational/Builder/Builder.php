<?php


namespace App\Creational\Builder;


use App\Creational\Builder\Parts\Vehicle;


interface Builder
{

    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;

}