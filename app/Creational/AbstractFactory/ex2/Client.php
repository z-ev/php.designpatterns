<?php


namespace App\Creational\AbstractFactory\ex2;


class Client
{

    /**
     * Клиентский код работает с фабриками и продуктами только через абстрактные
     * типы: Абстрактная Фабрика и Абстрактный Продукт. Это позволяет передавать
     * любой подкласс фабрики или продукта клиентскому коду, не нарушая его.
     * @param AbstractFactory $factory
     */
    function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";

    }

    /**
     * Клиентский код может работать с любым конкретным классом фабрики.

    echo "Client: Testing client code with the first factory type:\n";
    clientCode(new ConcreteFactory1());

    echo "\n";

    echo "Client: Testing the same client code with the second factory type:\n";
    clientCode(new ConcreteFactory2());
     */
}