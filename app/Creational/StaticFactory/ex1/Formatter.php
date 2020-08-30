<?php


namespace App\Creational\StaticFactory\ex1;


interface Formatter
{

    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string;

}