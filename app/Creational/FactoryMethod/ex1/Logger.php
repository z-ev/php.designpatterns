<?php


namespace App\Creational\FactoryMethod\ex1;


interface Logger
{

    /**
     * @param string $message
     * @return mixed
     */
    public function log(string $message);


}