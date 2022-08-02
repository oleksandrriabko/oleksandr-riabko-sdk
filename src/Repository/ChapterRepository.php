<?php

namespace Lotr\Sdk\Repository;

use Lotr\Sdk\Collection\ChapterCollection;
use Lotr\Sdk\Entity\Chapter;
use Lotr\Sdk\Factory\ChapterFactory;

class ChapterRepository extends BaseRepository
{
    private ChapterFactory $chapterFactory;

    public function __construct(ChapterFactory $chapterFactory)
    {
        $this->chapterFactory = $chapterFactory;
        parent::__construct();
    }

    public function findAll(string $token, ?array $queryParams = null): ChapterCollection
    {
        $chapters = $this->getApiClient()->requestAndParseJsonResponse('get', '/chapter', $queryParams, $token)['docs'];

        $result = new ChapterCollection();
        foreach ($chapters as $chapterArr) {
            $chapter = $this->chapterFactory->createFromArray($chapterArr);
            $result->add($chapter);
        }

        return $result;
    }

    public function findOne(string $token, string $id, ?array $queryParams = null): Chapter
    {
        $chapters = $this->getApiClient()->requestAndParseJsonResponse('get', "/chapter/$id", $queryParams, $token)['docs'];

        $chapterArr = reset($chapters);

        return $this->chapterFactory->createFromArray($chapterArr);
    }

    public function findByBookId(string $token, string $bookId, ?array $queryParams = null): ChapterCollection
    {
        $chapters = $this->getApiClient()->requestAndParseJsonResponse('get', "/book/$bookId/chapter", $queryParams, $token)['docs'];

        $result = new ChapterCollection();
        foreach ($chapters as $chapterArr) {
            $chapter = $this->chapterFactory->createFromArray($chapterArr);
            $result->add($chapter);
        }

        return $result;
    }
}