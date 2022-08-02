<?php

namespace Lotr\Sdk\Factory;

use Lotr\Sdk\Entity\Quote;

class QuoteFactory
{
    public function createFromArray(array $quoteArr): Quote
    {
        $quote = new Quote();

        $quote->setId($quoteArr['_id']);
        $quote->setMovieId($quoteArr['movie']);
        $quote->setCharacterId($quoteArr['character']);
        $quote->setDialog($quoteArr['dialog']);

        return $quote;
    }
}