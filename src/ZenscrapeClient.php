<?php
declare(strict_types=1);

namespace Zenscrape;

use Zenscrape\Auth\ApiKey;
use Zenscrape\Http\HttpClient;

class ZenscrapeClient implements ZensrapeClientInterface
{
    private HttpClient $httpClient;

    public function __construct(string $apiKey)
    {
        ApiKey::setKey($apiKey);

        $this->httpClient = new HttpClient();
    }

    public function getPage(string $method, string $url, array $data, array $headers): string
    {
        $result = $this->httpClient->sendRequest($method, $url, $data, $headers);

        return $result->getMessage();
    }
}