<?php


namespace Structural\Adapter;

use App\Structural\Adapter\EBookAdapter;

use App\Structural\Adapter\Kindle;

use App\Structural\Adapter\PaperBook;

use PHPUnit\Framework\TestCase;


class AdapterTest extends TestCase
{

    /**
     * @test
     */
    public function test_can_turn_page_on_book()
    {

        $book = new PaperBook();

        $book->open();

        $book->turnPage();

        $this->assertSame(2, $book->getPage());

    }


    /**
     * @test
     */
    public function test_can_turn_page_on_Kindle()
    {

        $kindle = new Kindle();

        $book = new EBookAdapter($kindle);

        $book->open();

        $book->turnPage();

        $this->assertSame(2, $book->getPage());

    }


}