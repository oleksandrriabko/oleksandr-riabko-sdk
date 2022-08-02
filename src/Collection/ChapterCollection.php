<?php

namespace Lotr\Sdk\Collection;

use Lotr\Sdk\Entity\Chapter;
use Ramsey\Collection\AbstractCollection;

class ChapterCollection extends AbstractCollection
{
    public function getType(): string
    {
        return Chapter::class;
    }
}