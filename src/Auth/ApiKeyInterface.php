<?php
declare(strict_types=1);

namespace Zenscrape\Auth;

interface ApiKeyInterface
{
    public static function getKey(): string;
    public static function setKey(string $key): void;
}