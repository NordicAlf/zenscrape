<?php

namespace Zenscrape\Tests;

use PHPUnit\Framework\TestCase;
use Zenscrape\Auth\ApiKey;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\ZenscrapeClient;

class ZenscrapeClientTest extends TestCase
{
    public function testGetPage()
    {
        $queryRequest = new QueryRequestModel();
        $queryRequest
            ->setLocation('USA')
            ->setUrl('https://google.com');

        $headersRequest = new HeaderRequestModel();
        $headersRequest
            ->setApikey($_ENV['api_key'])
            ->setCustomHeader('Content-Type', 'application/json');

        $zenscrapeClient = new ZenscrapeClient('95af6ce0-5a46-11eb-bf07-1f620e9d97fd');

        $page = $zenscrapeClient->getPage('POST', $queryRequest, $headersRequest);

        // tests
        $this->assertNotEmpty(ApiKey::getKey());
        $this->assertIsString(ApiKey::getKey());
        $this->assertNotEmpty($page);
        $this->assertIsString($page);
    }
}