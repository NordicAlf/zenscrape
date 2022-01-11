<?php
declare(strict_types=1);

namespace Zenscrape;

interface ZensrapeClientInterface
{
    public function getPage(string $method, string $url, array $data, array $headers): string;
}