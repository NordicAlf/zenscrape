<?php

/*
 * This file is part of the Zenscrape package
 *
 * (c) Andrei Tsvyrko <nordic_alf@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenscrape\Tests\Validator;

use PHPUnit\Framework\TestCase;
use Zenscrape\Exception\ZenscrapeException;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\Validator\HeaderRequestValidator;
use Zenscrape\Validator\QueryRequestValidator;

class HeaderRequestValidatorTest extends TestCase
{
    public function testRightRequest()
    {
        $headerRequest = new HeaderRequestModel();
        $headerRequest->setCustomHeader('Content-Type', 'application/json');
        $headerRequest->setApikey($_ENV['api_key']);

        $this->assertTrue((new HeaderRequestValidator($headerRequest))->check());
    }

    public function testApikeyException()
    {
        $this->expectException(ZenscrapeException::class);

        $headerRequest = new HeaderRequestModel();
        $headerRequest->setCustomHeader('Content-Type', 'application/json');

        $result = (new HeaderRequestValidator($headerRequest))->check();
    }

    public function testCustomHeadersException()
    {
        $this->expectException(ZenscrapeException::class);

        $headerRequest = new HeaderRequestModel();
        $headerRequest->setApikey($_ENV['api_key']);

        $result = (new HeaderRequestValidator($headerRequest))->check();
    }
}