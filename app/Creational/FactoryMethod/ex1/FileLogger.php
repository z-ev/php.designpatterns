<?php


namespace App\Creational\FactoryMethod\ex1;


class FileLogger implements Logger
{

    private $filePath;

    /**
     * FileLogger constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {

        $this->filePath = $filePath;

    }


    /**
     * @param string $message
     */
    public function log(string $message)
    {

        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);

    }


}