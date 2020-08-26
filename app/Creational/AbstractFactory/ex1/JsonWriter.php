<?php


namespace App\Creational\AbstractFactory\ex1;


interface JsonWriter
{

    public function write(array $data, bool $formatted): string;

}