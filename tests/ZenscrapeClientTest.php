<?php

/*
 * This file is part of the Zenscrape package
 *
 * (c) Andrei Tsvyrko <nordic_alf@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenscrape\Tests;

use PHPUnit\Framework\TestCase;
use Zenscrape\Auth\ApiKey;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\Storage\LocationStorage;
use Zenscrape\ZenscrapeClient;

class ZenscrapeClientTest extends TestCase
{
    public function testGetPage()
    {
        $queryRequest = new QueryRequestModel();
        $queryRequest
            ->setLocation(LocationStorage::COMMON_EUROPE)
            ->setUrl($_ENV['site_url']);

        $headersRequest = new HeaderRequestModel();
        $headersRequest->setCustomHeader('Content-Type', 'application/json');

        $zenscrapeClient = new ZenscrapeClient($_ENV['api_key']);

        $page = $zenscrapeClient->getPage('POST', $queryRequest, $headersRequest);

        // tests
        $this->assertNotEmpty(ApiKey::getKey());
        $this->assertIsString(ApiKey::getKey());
        $this->assertNotEmpty($page);
        $this->assertIsString($page);
    }
}