<?php


namespace App\Creational\AbstractFactory\ex1;


class WinCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {

        return join(',', $line) . "\r\n";

    }

}