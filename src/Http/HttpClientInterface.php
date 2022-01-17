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

use Zenscrape\Http\Response\HttpResponseInterface;

/**
 * Interface HttpClientInterface
 */
interface HttpClientInterface
{
    /**
     * Send Request to Zenscrape.com via Guzzle
     * @param string $method GET/POST
     * @param array $query - equivalent of $_GET/$_POST
     * @param array $headers - HTTP headers
     */
    public function sendRequest(string $method, array $query, array $headers): HttpResponseInterface;
}