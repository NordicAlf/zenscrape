<?php

namespace Zenscrape\Tests\Http;

use PHPUnit\Framework\TestCase;
use Zenscrape\Http\HttpClient;
use Zenscrape\Http\Response\HttpResponse;

class HttpClientTest extends TestCase
{
    public function testSendRequest()
    {
        $method = 'GET';
        $url = 'https://app.zenscrape.com/api/v1/get';
        $data = [
            'url' => 'https://www.21vek.by/'
        ];
        $headers = [
            'Content-Type' => 'application/json',
            'apikey' => '95af6ce0-5a46-11eb-bf07-1f620e9d97fd'
        ];

        $httpClient = new HttpClient();
        $response = $httpClient->sendRequest($method, $url, $data, $headers);

        $this->assertInstanceOf(HttpResponse::class, $response);
        $this->assertIsInt($response->getCode());
        $this->assertIsString($response->getMessage());
    }
}