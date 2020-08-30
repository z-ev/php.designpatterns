<?php


namespace App\Creational\FactoryMethod\ex1;


class FileLoggerFactory implements LoggerFactory
{

    private $filePath;

    /**
     * FileLoggerFactory constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {

        $this->filePath = $filePath;

    }

    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {

        return new FileLogger($this->filePath);

    }


}