<?php


namespace App\Creational\AbstractFactory\ex1;


class UnixJsonWriter implements JsonWriter
{

    public function write(array $data, bool $formatted): string
    {

        $options = 0;

        if ($formatted) {

            $options = JSON_PRETTY_PRINT;

        }

        return json_encode($data, $options);

    }

}