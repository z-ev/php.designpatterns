<?php


namespace Creational\FactoryMethod;


use App\Creational\FactoryMethod\ex1\FileLogger;

use App\Creational\FactoryMethod\ex1\FileLoggerFactory;

use App\Creational\FactoryMethod\ex1\StdoutLogger;

use App\Creational\FactoryMethod\ex1\StdoutLoggerFactory;

use PHPUnit\Framework\TestCase;


class FactoryMethodTest extends TestCase
{

    /**
     * @test
     */
    public function test_can_create_StdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }


    /**
     * @test
     */
    public function test_can_create_FileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }

}