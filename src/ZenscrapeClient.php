<?php
declare(strict_types=1);

namespace Zenscrape;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class ZenscrapeClient
{
    protected Client $guzzleClient;

    public function __construct()
    {
        $this->guzzleClient = new Client();
    }

    public function request(): ResponseInterface
    {
        return $this->guzzleClient->request('GET', 'https://google.com');
    }
}