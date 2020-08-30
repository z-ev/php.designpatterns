<?php


namespace Creational\StaticFactory;


use InvalidArgumentException;

use App\Creational\StaticFactory\ex1\FormatNumber;

use App\Creational\StaticFactory\ex1\FormatString;

use App\Creational\StaticFactory\ex1\StaticFactory;

use PHPUnit\Framework\TestCase;


class StaticFactoryTest extends TestCase
{

    /**
     * 2@test
     */
    public function test_can_create_NumberFormatter()
    {

        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));

    }


    /**
     * 2@test
     */
    public function test_can_create_StringFormatter()
    {

        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));

    }


    /**
     * 2@test
     */
    public function test_exception()
    {

        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');

    }


}