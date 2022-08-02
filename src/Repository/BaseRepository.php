<?php

namespace Lotr\Sdk\Repository;

use Lotr\Sdk\ApiClient\ApiClient;

abstract class BaseRepository
{
    private const BASE_URI = 'https://the-one-api.dev/v2';

    private ApiClient $apiClient;

    public function __construct()
    {
        $this->apiClient = new ApiClient(self::BASE_URI);
    }

    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }
}