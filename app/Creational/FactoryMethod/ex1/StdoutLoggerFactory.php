<?php


namespace App\Creational\FactoryMethod\ex1;


class StdoutLoggerFactory implements LoggerFactory
{

    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {

        return new StdoutLogger();

    }



}