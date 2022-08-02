<?php

namespace Lotr\Sdk\Collection;

use Lotr\Sdk\Entity\Book;
use Ramsey\Collection\AbstractCollection;

class BookCollection extends AbstractCollection
{
    public function getType(): string
    {
        return Book::class;
    }
}