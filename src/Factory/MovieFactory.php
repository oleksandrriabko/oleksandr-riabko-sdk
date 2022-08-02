<?php

namespace Lotr\Sdk\Factory;

use Lotr\Sdk\Entity\Movie;

class MovieFactory
{
    public function createFromArray(array $movieArr): Movie
    {
        $movie = new Movie();

        $movie->setId($movieArr['_id']);
        $movie->setName($movieArr['name']);
        $movie->setRuntimeInMinutes($movieArr['runtimeInMinutes']);
        $movie->setBudgetInMillions($movieArr['budgetInMillions']);
        $movie->setBoxOfficeRevenueInMillions($movieArr['boxOfficeRevenueInMillions']);
        $movie->setAcademyAwardNominations($movieArr['academyAwardNominations']);
        $movie->setAcademyAwardWins($movieArr['academyAwardWins']);
        $movie->setRottenTomatoesScore($movieArr['rottenTomatoesScore']);

        return $movie;
    }
}