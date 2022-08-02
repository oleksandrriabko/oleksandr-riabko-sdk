<?php

namespace Lotr\Sdk\Repository;

use Lotr\Sdk\Collection\BookCollection;
use Lotr\Sdk\Entity\Book;
use Lotr\Sdk\Factory\BookFactory;

class BookRepository extends BaseRepository
{
    private BookFactory $bookFactory;

    public function __construct(BookFactory $bookFactory)
    {
        $this->bookFactory = $bookFactory;
        parent::__construct();
    }

    public function findAll(?array $queryParams): BookCollection
    {
        $books = $this->getApiClient()->requestAndParseJsonResponse('get', '/book', $queryParams)['docs'];

        $result = new BookCollection();
        foreach ($books as $bookArr) {
            $book = $this->bookFactory->createFromArray($bookArr);
            $result->add($book);
        }

        return $result;
    }

    public function findOneById(string $id, ?array $queryParams): Book
    {
        $books = $this->getApiClient()->requestAndParseJsonResponse('get', "/book/$id", $queryParams)['docs'];

        $bookArr = reset($books);

        return $this->bookFactory->createFromArray($bookArr);
    }
}