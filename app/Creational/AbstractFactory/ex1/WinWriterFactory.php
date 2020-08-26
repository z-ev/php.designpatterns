<?php


namespace App\Creational\AbstractFactory\ex1;


class WinWriterFactory implements WriterFactory
{

    public function createCsvWriter(): CsvWriter
    {

        return new WinCsvWriter();

    }

    public function createJsonWriter(): JsonWriter
    {

        return new WinJsonWriter();

    }

}