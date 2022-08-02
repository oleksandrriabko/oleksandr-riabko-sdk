<?php

namespace Lotr\Sdk\Entity;

class Chapter
{
    private string $id;
    private string $chapterName;
    private string $bookId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getChapterName(): string
    {
        return $this->chapterName;
    }

    public function setChapterName(string $chapterName): void
    {
        $this->chapterName = $chapterName;
    }

    public function getBookId(): string
    {
        return $this->bookId;
    }

    public function setBookId(string $bookId): void
    {
        $this->bookId = $bookId;
    }
}