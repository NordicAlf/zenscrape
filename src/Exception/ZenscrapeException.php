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

namespace Zenscrape\Exception;

use Exception;
use Throwable;

/**
 * Class ZenscrapeException
 */
class ZenscrapeException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}