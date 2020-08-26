<?php


namespace App\Creational\AbstractFactory\ex2;

/**
 * Каждая Конкретная Фабрика имеет соответствующую вариацию продукта.
 */
class ConcreteFactory2 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {

        return new ConcreteProductA2();

    }

    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {

        return new ConcreteProductB2();

    }

}