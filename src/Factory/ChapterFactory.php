<?php

namespace Lotr\Sdk\Factory;

use Lotr\Sdk\Entity\Chapter;

class ChapterFactory
{
    public function createFromArray(array $chapterArr): Chapter
    {
        $chapter = new Chapter();

        $chapter->setId($chapterArr['_id']);
        $chapter->setBookId($chapterArr['book']);
        $chapter->setChapterName($chapterArr['chapterName']);

        return $chapter;
    }
}