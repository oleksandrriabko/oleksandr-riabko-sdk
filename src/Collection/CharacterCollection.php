<?php

namespace Lotr\Sdk\Collection;

use Lotr\Sdk\Entity\Character;
use Ramsey\Collection\AbstractCollection;

class CharacterCollection extends AbstractCollection
{
    public function getType(): string
    {
        return Character::class;
    }
}