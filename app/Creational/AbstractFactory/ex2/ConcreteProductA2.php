<?php


namespace App\Creational\AbstractFactory\ex2;


class ConcreteProductA2 implements AbstractProductA
{


    /**
     * @return string
     */
    public function usefulFunctionA(): string
    {

        return "The result of the product A2.";

    }


}