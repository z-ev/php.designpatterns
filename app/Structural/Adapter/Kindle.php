<?php


namespace App\Structural\Adapter;


use phpDocumentor\Reflection\Types\Integer;

class Kindle implements EBook
{

    private $page = 1;

    private $totalPages = 100;

    public function pressNext()
    {

        $this->page++;

    }

    public function unlock()
    {

    }


    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     *
     * @return array
     */
    public function getPage(): array
    {

        return [$this->page, $this->totalPages];

    }

}