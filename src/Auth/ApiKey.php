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

use Zenscrape\Storage\MessageStorage;

/**
 * Class ApiKey for https://zenscrape.com/
 */
class ApiKey implements ApiKeyInterface
{
    static private string $key;

    public static function getKey(): string
    {
        return !empty(self::$key) ? self::$key : MessageStorage::API_KEY_NOT_BE_FOUND ;
    }

    public static function setKey(string $key): void
    {
        self::$key = $key;
    }
}
