<?php
declare(strict_types=1);

namespace Zenscrape\Auth;

use Zenscrape\Storage\MessageStorage;

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
