<?php


namespace App\Creational\AbstractFactory\ex2;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 */
class ConcreteProductA1 implements AbstractProductA
{

    /**
     * @return string
     */
    public function usefulFunctionA(): string
    {

        return "The result of the product A1.";

    }


}