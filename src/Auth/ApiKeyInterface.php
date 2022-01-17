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

namespace Zenscrape\Auth;

/**
 * Interface for Apikey
 */
interface ApiKeyInterface
{
    /**
     * Get apikey for https://zenscrape.com/
     */
    public static function getKey(): string;

    /**
     * Set apikey for https://zenscrape.com/
     *
     * @param string $key
     */
    public static function setKey(string $key): void;
}