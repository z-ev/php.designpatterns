<?php


namespace App\Creational\AbstractFactory\ex1;


class UnixCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {

        return join(',', $line) . "\n";

    }

}