<?php
declare(strict_types=1);

namespace Zenscrape\Http;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Zenscrape\Http\Response\HttpResponse;
use Zenscrape\Http\Response\HttpResponseInterface;

class HttpClient implements HttpClientInterface
{
    protected Client $guzzleClient;
    protected string $apiZenscrapeEndpoint = 'https://app.zenscrape.com/api/v1/get';

    public function __construct()
    {
        $this->guzzleClient = new Client();
    }

    public function sendRequest(string $method, array $query, array $headers): HttpResponseInterface
    {
        try {
            $result = $this->guzzleClient->request($method, $this->apiZenscrapeEndpoint, [
                RequestOptions::HEADERS => $headers,
                RequestOptions::JSON => $query
            ]);

            $response = new HttpResponse($result->getStatusCode(),  $result->getBody()->getContents());
        } catch (\Throwable $httpException) {
            $response = new HttpResponse($httpException->getCode(), $httpException->getMessage());
        }

        return $response;
    }
}