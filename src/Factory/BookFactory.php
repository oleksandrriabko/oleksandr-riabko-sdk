<?php

namespace Lotr\Sdk\Factory;

use Lotr\Sdk\Entity\Book;

class BookFactory
{
    public function createFromArray(array $bookArr): Book
    {
        $book = new Book();

        $book->setId($bookArr['_id']);
        $book->setName($bookArr['name']);

        return $book;
    }
}