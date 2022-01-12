<?php

namespace Zenscrape\Tests;

use PHPUnit\Framework\TestCase;
use Zenscrape\Auth\ApiKey;
use Zenscrape\ZenscrapeClient;

class ZenscrapeClientTest extends TestCase
{
    public function testGetPage()
    {
        $zenscrapeClient = new ZenscrapeClient('95af6ce0-5a46-11eb-bf07-1f620e9d97fd');

        $method = 'GET';
        $url = 'https://app.zenscrape.com/api/v1/get';
        $data = [
            'url' => 'https://www.21vek.by/'
        ];
        $headers = [
            'Content-Type' => 'application/json',
            'apikey' => ApiKey::getKey()
        ];

        $page = $zenscrapeClient->getPage($method, $url, $data, $headers);

        // tests
        $this->assertNotEmpty(ApiKey::getKey());
        $this->assertIsString(ApiKey::getKey());
        $this->assertNotEmpty($page);
        $this->assertIsString($page);
    }
}