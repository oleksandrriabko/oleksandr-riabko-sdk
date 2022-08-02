<?php

namespace Lotr\Sdk\Entity;

class Character
{
    private string $id;
    private int $height;
    private string $race;
    private string $gender;
    private string $birth;
    private string $spouse;
    private string $death;
    private string $realm;
    private string $hair;
    private string $name;
    private string $wikiUrl;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getRace(): string
    {
        return $this->race;
    }

    public function setRace(string $race): void
    {
        $this->race = $race;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function getBirth(): string
    {
        return $this->birth;
    }

    public function setBirth(string $birth): void
    {
        $this->birth = $birth;
    }

    public function getSpouse(): string
    {
        return $this->spouse;
    }

    public function setSpouse(string $spouse): void
    {
        $this->spouse = $spouse;
    }

    public function getDeath(): string
    {
        return $this->death;
    }

    public function setDeath(string $death): void
    {
        $this->death = $death;
    }

    public function getRealm(): string
    {
        return $this->realm;
    }

    public function setRealm(string $realm): void
    {
        $this->realm = $realm;
    }

    public function getHair(): string
    {
        return $this->hair;
    }

    public function setHair(string $hair): void
    {
        $this->hair = $hair;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getWikiUrl(): string
    {
        return $this->wikiUrl;
    }

    public function setWikiUrl(string $wikiUrl): void
    {
        $this->wikiUrl = $wikiUrl;
    }
}