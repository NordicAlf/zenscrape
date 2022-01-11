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

    public function __construct()
    {
        $this->guzzleClient = new Client();
    }

    public function sendRequest(string $method, string $uri, array $data, array $headers): HttpResponseInterface
    {
        try {
            $result = $this->guzzleClient->request($method, $uri, [
                RequestOptions::HEADERS => $headers,
                RequestOptions::JSON => $data
            ]);

            $response = new HttpResponse($result->getStatusCode(),  $result->getBody()->getContents());
        } catch (\Throwable $httpException) {
            $response = new HttpResponse($httpException->getCode(), $httpException->getMessage());
        }

        return $response;
    }
}