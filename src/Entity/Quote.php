<?php

namespace Lotr\Sdk\Entity;

class Quote
{
    private string $id;
    private string $movieId;
    private string $characterId;
    private string $dialog;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getMovieId(): string
    {
        return $this->movieId;
    }

    public function setMovieId(string $movieId): void
    {
        $this->movieId = $movieId;
    }

    public function getCharacterId(): string
    {
        return $this->characterId;
    }

    public function setCharacterId(string $characterId): void
    {
        $this->characterId = $characterId;
    }

    public function getDialog(): string
    {
        return $this->dialog;
    }

    public function setDialog(string $dialog): void
    {
        $this->dialog = $dialog;
    }
}