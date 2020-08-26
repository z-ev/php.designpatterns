<?php


namespace App\Structural\Adapter;


interface Book
{

    public function turnPage();

    public function open();

    public function getPage(): int;

}