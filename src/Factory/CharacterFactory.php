<?php

namespace Lotr\Sdk\Factory;

use Lotr\Sdk\Entity\Character;

class CharacterFactory
{
    public function createFromArray(array $characterArr): Character
    {
        $character = new Character();

        $character->setId($characterArr['_id']);
        $character->setHeight((int) $characterArr['height']);
        $character->setRace($characterArr['race']);
        $character->setGender($characterArr['gender']);
        $character->setBirth($characterArr['birth']);
        $character->setSpouse($characterArr['spouse']);
        $character->setDeath($characterArr['death']);
        $character->setRealm($characterArr['realm']);
        $character->setHair($characterArr['hair']);
        $character->setName($characterArr['name']);
        $character->setWikiUrl($characterArr['wikiUrl']);

        return $character;
    }
}