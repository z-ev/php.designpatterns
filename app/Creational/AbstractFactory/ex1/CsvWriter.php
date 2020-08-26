<?php


namespace App\Creational\AbstractFactory\ex1;


interface CsvWriter
{

    public function write(array $line): string;

}