<?php

namespace Lotr\Sdk\Repository;

use Lotr\Sdk\Collection\CharacterCollection;
use Lotr\Sdk\Entity\Character;
use Lotr\Sdk\Factory\CharacterFactory;

class CharacterRepository extends BaseRepository
{
    private CharacterFactory $characterFactory;

    public function __construct(CharacterFactory $characterFactory)
    {
        $this->characterFactory = $characterFactory;
        parent::__construct();
    }

    public function findAll(string $token, ?array $queryParams = null): CharacterCollection
    {
        $characters = $this->getApiClient()->requestAndParseJsonResponse('get', '/character', $queryParams, $token)['docs'];

        $result = new CharacterCollection();
        foreach ($characters as $characterArr) {
            $character = $this->characterFactory->createFromArray($characterArr);
            $result->add($character);
        }

        return $result;
    }

    public function findOne(string $token, string $id, ?array $queryParams = null): Character
    {
        $characters = $this->getApiClient()->requestAndParseJsonResponse('get', "/character/$id", $queryParams, $token)['docs'];

        $characterArr = reset($characters);

        return $this->characterFactory->createFromArray($characterArr);
    }
}