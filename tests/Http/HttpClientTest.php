<?php

/*
 * This file is part of the Zenscrape package
 *
 * (c) Andrei Tsvyrko <nordic_alf@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenscrape\Tests\Http;

use PHPUnit\Framework\TestCase;
use Zenscrape\Http\HttpClient;
use Zenscrape\Http\Response\HttpResponse;

class HttpClientTest extends TestCase
{
    public function testSendRequest()
    {
        $method = 'POST';
        $data = [
            'url' => $_ENV['site_url']
        ];
        $headers = [
            'Content-Type' => 'application/json',
            'apikey' => $_ENV['api_key']
        ];

        $httpClient = new HttpClient();
        $response = $httpClient->sendRequest($method, $data, $headers);

        $this->assertInstanceOf(HttpResponse::class, $response);
        $this->assertIsInt($response->getCode());
        $this->assertIsString($response->getMessage());
    }
}