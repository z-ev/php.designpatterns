<?php


namespace App\Creational\StaticFactory\ex1;


class FormatString  implements Formatter
{

    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string
    {

        return $input;

    }


}