<?php
declare(strict_types=1);

namespace Zenscrape\Http;

use Zenscrape\Http\Response\HttpResponseInterface;

interface HttpClientInterface
{
    public function sendRequest(string $method, array $query, array $headers): HttpResponseInterface;
}