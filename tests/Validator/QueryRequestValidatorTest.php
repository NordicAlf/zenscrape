<?php

namespace Zenscrape\Tests;

use PHPUnit\Framework\TestCase;
use Zenscrape\Exception\ZenscrapeException;
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\Storage\LocationStorage;
use Zenscrape\Validator\QueryRequestValidator;

class QueryRequestValidatorTest extends TestCase
{
    public function testRightRequest()
    {
        $queryRequest = new QueryRequestModel();
        $queryRequest->setLocation(LocationStorage::UNITED_STATES); // premium location
        $queryRequest->setUrl($_ENV['site_url']);
        $queryRequest->setLocation(LocationStorage::UNITED_STATES);
        $queryRequest->setPremium(true);

        $this->assertTrue((new QueryRequestValidator($queryRequest))->check());
    }

    public function testUrlException()
    {
        $this->expectException(ZenscrapeException::class);

        $queryRequest = new QueryRequestModel();

        $result = (new QueryRequestValidator($queryRequest))->check();
    }

    public function testPremiumLocationException()
    {
        $this->expectException(ZenscrapeException::class);

        $queryRequest = new QueryRequestModel();
        $queryRequest->setLocation(LocationStorage::UNITED_STATES); // premium location
        $queryRequest->setUrl($_ENV['site_url']);

        $result = (new QueryRequestValidator($queryRequest))->check();
    }

    public function testLocationException()
    {
        $this->expectException(ZenscrapeException::class);

        $queryRequest = new QueryRequestModel();
        $queryRequest->setUrl($_ENV['site_url']);

        $result = (new QueryRequestValidator($queryRequest))->check();
    }

    public function testScrollToBottomException()
    {
        $this->expectException(ZenscrapeException::class);

        $queryRequest = new QueryRequestModel();
        $queryRequest->setUrl($_ENV['site_url']);
        $queryRequest->setLocation(LocationStorage::COMMON_EUROPE);
        $queryRequest->setScrollToBottom(true);

        $result = (new QueryRequestValidator($queryRequest))->check();
    }

    public function testWaitForException()
    {
        $this->expectException(ZenscrapeException::class);

        $queryRequest = new QueryRequestModel();
        $queryRequest->setUrl($_ENV['site_url']);
        $queryRequest->setLocation(LocationStorage::COMMON_EUROPE);
        $queryRequest->setWaitFor(3);

        $result = (new QueryRequestValidator($queryRequest))->check();
    }
}