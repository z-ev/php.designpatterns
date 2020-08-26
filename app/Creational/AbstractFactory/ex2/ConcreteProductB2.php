<?php


namespace App\Creational\AbstractFactory\ex2;


class ConcreteProductB2 implements AbstractProductB
{

    /**
     * @return string
     */
    public function usefulFunctionB(): string
    {

        return "The result of the product B2.";

    }

    /**
     * Продукт B2 может корректно работать только с Продуктом A2. Тем не менее,
     * он принимает любой экземпляр Абстрактного Продукта А в качестве
     * аргумента.
     * @param AbstractProductA $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {

        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";

    }


}