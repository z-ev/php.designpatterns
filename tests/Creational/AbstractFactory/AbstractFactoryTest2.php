<?php

namespace Tests\Creational\AbstractFactory;

use App\Creational\AbstractFactory\ex2\AbstractFactory;

use App\Creational\AbstractFactory\ex2\AbstractProductA;

use App\Creational\AbstractFactory\ex2\AbstractProductB;
use App\Creational\AbstractFactory\ex2\ConcreteFactory1;

use App\Creational\AbstractFactory\ex2\ConcreteFactory2;

use PHPUnit\Framework\TestCase;


class AbstractFactoryTest2 extends TestCase
{


    /**
     * @return array
     */
    public function provideFactory()
    {

        return [

            [new ConcreteFactory1()],

            [new ConcreteFactory2()]

        ];

    }


    /**
     * @dataProvider provideFactory
     *
     * Example 2 /ex2
     *
     * @param AbstractFactory $factory
     */
    public function test_can_create_products(AbstractFactory $factory)
    {

        $this->assertInstanceOf(AbstractProductA::class, $factory->createProductA());

        $this->assertInstanceOf(AbstractProductB::class, $factory->createProductB());

    }


}