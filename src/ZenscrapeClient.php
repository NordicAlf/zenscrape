<?php
declare(strict_types=1);

namespace Zenscrape;

use Zenscrape\Http\HttpClient;

class ZenscrapeClient implements  ZensrapeClientInterface
{
    protected HttpClient $httpClient;

    public function __construct()
    {
        $this->httpClient = new HttpClient();
    }

    public function getPage(string $method, string $url, array $data, array $headers): string
    {
        $result = $this->httpClient->sendRequest($method, $url, $data, $headers);

        return $result->getMessage();
    }
}