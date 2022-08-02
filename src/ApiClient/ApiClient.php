<?php

namespace Lotr\Sdk\ApiClient;

use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct(string $baseUri)
    {
        $this->client = new Client([
            'base_uri' => $baseUri
        ]);
    }

    public function requestAndParseJsonResponse(string $method, string $url, ?array $queryParams, ?string $token = null): array
    {
        $responseContent = (string) $this->client->request($method, $url, [
            'headers' => $this->buildHeaders($token),
            'query' => $queryParams
        ])->getBody();

        return json_decode($responseContent, false, 512, JSON_THROW_ON_ERROR);
    }

    private function buildHeaders(?string $token): array
    {
        $headers = [];

        if ($token) {
            $headers[] = $token;
        }

        return $headers;
    }
}