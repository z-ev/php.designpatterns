<?php


namespace App\Creational\FactoryMethod\ex1;


class StdoutLogger implements Logger
{

    /**
     * @param string $message
     */
    public function log(string $message)
    {

        echo $message;

    }


}