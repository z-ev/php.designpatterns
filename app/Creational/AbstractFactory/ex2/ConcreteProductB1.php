<?php


namespace App\Creational\AbstractFactory\ex2;

/**
 * Конкретные Продукты создаются соответствующими Конкретными Фабриками.
 */
class ConcreteProductB1 implements AbstractProductB
{

    public function usefulFunctionB(): string
    {

        return "The result of the product B1.";

    }

    /**
     * Продукт B1 может корректно работать только с Продуктом A1. Тем не менее,
     * он принимает любой экземпляр Абстрактного Продукта А в качестве
     * аргумента.
     * @param AbstractProductA $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {

        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";

    }

}