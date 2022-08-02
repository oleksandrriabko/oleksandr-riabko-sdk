<?php

namespace Lotr\Sdk\Collection;

use Lotr\Sdk\Entity\Quote;
use Ramsey\Collection\AbstractCollection;

class QuoteCollection extends AbstractCollection
{
    public function getType(): string
    {
        return Quote::class;
    }
}