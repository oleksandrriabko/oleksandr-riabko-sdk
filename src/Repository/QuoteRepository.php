<?php

namespace Lotr\Sdk\Repository;

use Lotr\Sdk\Collection\QuoteCollection;
use Lotr\Sdk\Entity\Quote;
use Lotr\Sdk\Factory\QuoteFactory;

class QuoteRepository extends BaseRepository
{
    private QuoteFactory $quoteFactory;

    public function __construct(QuoteFactory $quoteFactory)
    {
        $this->quoteFactory = $quoteFactory;
        parent::__construct();
    }

    public function findAll(string $token, ?array $queryParams = null): QuoteCollection
    {
        $quotes = $this->getApiClient()->requestAndParseJsonResponse('get', '/quote', $queryParams, $token)['docs'];

        $result = new QuoteCollection();
        foreach ($quotes as $quoteArr) {
            $quote = $this->quoteFactory->createFromArray($quoteArr);
            $result->add($quote);
        }

        return $result;
    }

    public function findOneById(string $token, string $id, ?array $queryParams = null): Quote
    {
        $quotes = $this->getApiClient()->requestAndParseJsonResponse('get', "/quote/$id", $queryParams, $token)['docs'];

        $quoteArr = reset($quotes);

        return $this->quoteFactory->createFromArray($quoteArr);
    }

    public function findByMovieId(string $token, string $movieId, ?array $queryParams = null): QuoteCollection
    {
        $quotes = $this->getApiClient()->requestAndParseJsonResponse('get', "/movie/$movieId/quote", $queryParams, $token)['docs'];

        $result = new QuoteCollection();
        foreach ($quotes as $quoteArr) {
            $quote = $this->quoteFactory->createFromArray($quoteArr);
            $result->add($quote);
        }

        return $result;
    }

    public function findByCharacterId(string $token, string $characterId, ?array $queryParams = null): QuoteCollection
    {
        $quotes = $this->getApiClient()->requestAndParseJsonResponse('get', "/character/$characterId/quote", $queryParams, $token)['docs'];

        $result = new QuoteCollection();
        foreach ($quotes as $quoteArr) {
            $quote = $this->quoteFactory->createFromArray($quoteArr);
            $result->add($quote);
        }

        return $result;
    }
}