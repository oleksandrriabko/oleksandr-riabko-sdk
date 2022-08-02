<?php

namespace Lotr\Sdk;

use Lotr\Sdk\Repository\BookRepository;
use Lotr\Sdk\Repository\ChapterRepository;
use Lotr\Sdk\Repository\CharacterRepository;
use Lotr\Sdk\Repository\MovieRepository;
use Lotr\Sdk\Repository\QuoteRepository;

class LotrSdk
{
    private BookRepository $bookRepository;
    private MovieRepository $movieRepository;
    private CharacterRepository $characterRepository;
    private QuoteRepository $quoteRepository;
    private ChapterRepository $chapterRepository;

    public function __construct(
        BookRepository $bookRepository,
        MovieRepository $movieRepository,
        CharacterRepository $characterRepository,
        QuoteRepository $quoteRepository,
        ChapterRepository $chapterRepository
    ) {
        $this->bookRepository = $bookRepository;
        $this->movieRepository = $movieRepository;
        $this->characterRepository = $characterRepository;
        $this->quoteRepository = $quoteRepository;
        $this->chapterRepository = $chapterRepository;
    }

    public function getBookRepository(): BookRepository
    {
        return $this->bookRepository;
    }

    public function getMovieRepository(): MovieRepository
    {
        return $this->movieRepository;
    }

    public function getCharacterRepository(): CharacterRepository
    {
        return $this->characterRepository;
    }

    public function getQuoteRepository(): QuoteRepository
    {
        return $this->quoteRepository;
    }

    public function getChapterRepository(): ChapterRepository
    {
        return $this->chapterRepository;
    }
}