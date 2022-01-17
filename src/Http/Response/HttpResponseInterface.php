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
 * Interface HttpResponseInterface
 */
interface HttpResponseInterface
{
    /**
     * HTTP response status code from zenscrape.com
     *
     * @return int
     */
    public function getCode(): int;

    /**
     * HTTP response message from zenscrape.com
     *
     * @return string
     */
    public function getMessage(): string;
}