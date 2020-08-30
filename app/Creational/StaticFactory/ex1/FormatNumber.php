<?php


namespace App\Creational\StaticFactory\ex1;


class FormatNumber implements Formatter
{

    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string
    {

        return number_format((int) $input);

    }


}