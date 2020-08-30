<?php


namespace App\Creational\FactoryMethod\ex1;


interface LoggerFactory
{

    /**
     * @return Logger
     */
    public function createLogger(): Logger;


}