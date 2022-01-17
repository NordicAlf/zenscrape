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

namespace Zenscrape\Http\Response;

/**
 * Class HttpResponse, this response from zenscrape.com
 */
class HttpResponse implements HttpResponseInterface
{
    public function __construct(
        private int $code,
        private string $message
    ) {}

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}