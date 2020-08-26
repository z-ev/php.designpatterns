<?php

namespace Tests\Creational\AbstractFactory;

use App\Creational\AbstractFactory\ex1\CsvWriter;

use App\Creational\AbstractFactory\ex1\JsonWriter;

use App\Creational\AbstractFactory\ex1\UnixWriterFactory;

use App\Creational\AbstractFactory\ex1\WinWriterFactory;

use App\Creational\AbstractFactory\ex1\WriterFactory;

use PHPUnit\Framework\TestCase;

class AbstractFactoryTest1 extends TestCase
{

    /**
     * @return array
     */
    public function provideFactory()
    {

        return [

            [new UnixWriterFactory()],

            [new WinWriterFactory()]

        ];

    }


    /**
     * @dataProvider provideFactory
     *
     * Example 1 /ex1
     *
     * @param WriterFactory $writerFactory
     */
    public function test_can_create_CsvWriterOnUnix(WriterFactory $writerFactory)
    {

        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());

        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());

    }


}