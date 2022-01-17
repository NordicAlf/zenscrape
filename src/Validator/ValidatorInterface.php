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

namespace Zenscrape\Validator;

use Zenscrape\Exception\ZenscrapeException;

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface
{
    /**
     * Check all query and headers params for request
     * If request data is incorrect, so throw ZenscrapeException
     *
     * @return bool
     */
    public function check(): bool;
}