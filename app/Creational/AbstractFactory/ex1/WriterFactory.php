<?php


namespace App\Creational\AbstractFactory\ex1;


interface WriterFactory
{

    public function createCsvWriter(): CsvWriter;

    public function createJsonWriter(): JsonWriter;

}