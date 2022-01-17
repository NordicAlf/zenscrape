<?php
declare(strict_types=1);

/*
 * This file is part of the Zenscrape package
 *
 * (c) Andrei Tsvyrko <nordic_alf@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenscrape\Http;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Zenscrape\Http\Response\HttpResponse;
use Zenscrape\Http\Response\HttpResponseInterface;

/**
 * Class HttpClient serves to send requests to zenscrape.com via Guzzle
 */
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