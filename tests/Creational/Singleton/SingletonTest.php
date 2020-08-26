<?php


namespace Tests\Creational\Singleton;

use PHPUnit\Framework\TestCase;

use App\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    /**
     * @test
     */
    public function test_uniqueness()
    {

        $firstCall = Singleton::getInstance();

        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);

        $this->assertSame($firstCall, $secondCall);

    }

}