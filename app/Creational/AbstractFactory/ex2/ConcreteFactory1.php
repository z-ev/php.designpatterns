<?php


namespace App\Creational\AbstractFactory\ex2;

/**
 * Конкретная Фабрика производит семейство продуктов одной вариации. Фабрика
 * гарантирует совместимость полученных продуктов. Обратите внимание, что
 * сигнатуры методов Конкретной Фабрики возвращают абстрактный продукт, в то
 * время как внутри метода создается экземпляр конкретного продукта.
 */
class ConcreteFactory1 implements AbstractFactory
{


    /**
     * @return AbstractProductA
     */
    public function createProductA(): AbstractProductA
    {

        return new ConcreteProductA1();

    }


    /**
     * @return AbstractProductB
     */
    public function createProductB(): AbstractProductB
    {

        return new ConcreteProductB1();

    }


}