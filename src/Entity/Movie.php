<?php

namespace Lotr\Sdk\Entity;

class Movie
{
    private string $id;
    private string $name;
    private int $runtimeInMinutes;
    private float $budgetInMillions;
    private float $boxOfficeRevenueInMillions;
    private int $academyAwardNominations;
    private int $academyAwardWins;
    private float $rottenTomatoesScore;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRuntimeInMinutes(): int
    {
        return $this->runtimeInMinutes;
    }

    public function setRuntimeInMinutes(int $runtimeInMinutes): void
    {
        $this->runtimeInMinutes = $runtimeInMinutes;
    }

    public function getBudgetInMillions(): float
    {
        return $this->budgetInMillions;
    }

    public function setBudgetInMillions(float $budgetInMillions): void
    {
        $this->budgetInMillions = $budgetInMillions;
    }

    public function getBoxOfficeRevenueInMillions(): float
    {
        return $this->boxOfficeRevenueInMillions;
    }

    public function setBoxOfficeRevenueInMillions(float $boxOfficeRevenueInMillions): void
    {
        $this->boxOfficeRevenueInMillions = $boxOfficeRevenueInMillions;
    }

    public function getAcademyAwardNominations(): int
    {
        return $this->academyAwardNominations;
    }

    public function setAcademyAwardNominations(int $academyAwardNominations): void
    {
        $this->academyAwardNominations = $academyAwardNominations;
    }

    public function getAcademyAwardWins(): int
    {
        return $this->academyAwardWins;
    }

    public function setAcademyAwardWins(int $academyAwardWins): void
    {
        $this->academyAwardWins = $academyAwardWins;
    }

    public function getRottenTomatoesScore(): float
    {
        return $this->rottenTomatoesScore;
    }

    public function setRottenTomatoesScore(float $rottenTomatoesScore): void
    {
        $this->rottenTomatoesScore = $rottenTomatoesScore;
    }
}