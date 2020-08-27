<?php


namespace App\Creational\Builder\Parts;


abstract class Vehicle
{

    /**
     * @var object[]
     */
    private $data = [];

    public function setPart(string $key, object $value)
    {

        $this->data[$key] = $value;

    }

}
