<?php

namespace Lotr\Sdk\Collection;

use Lotr\Sdk\Entity\Movie;
use Ramsey\Collection\AbstractCollection;

class MovieCollection extends AbstractCollection
{
    public function getType(): string
    {
        return Movie::class;
    }
}