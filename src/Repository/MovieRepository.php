<?php

namespace Lotr\Sdk\Repository;

use Lotr\Sdk\Collection\MovieCollection;
use Lotr\Sdk\Entity\Movie;
use Lotr\Sdk\Factory\MovieFactory;

class MovieRepository extends BaseRepository
{
    private MovieFactory $movieFactory;

    public function __construct(MovieFactory $movieFactory)
    {
        $this->movieFactory = $movieFactory;
        parent::__construct();
    }

    public function findAll(string $token, ?array $queryParams = null): MovieCollection
    {
        $movies = $this->getApiClient()->requestAndParseJsonResponse('get', '/movie', $queryParams, $token)['docs'];

        $result = new MovieCollection();
        foreach ($movies as $movieArr) {
            $movie = $this->movieFactory->createFromArray($movieArr);
            $result->add($movie);
        }

        return $result;
    }

    public function findOneById(string $token, string $id, ?array $queryParams = null): Movie
    {
        $movies = $this->getApiClient()->requestAndParseJsonResponse('get', "/movie/$id", $queryParams, $token)['docs'];

        $movieArr = reset($movies);

        return $this->movieFactory->createFromArray($movieArr);
    }
}