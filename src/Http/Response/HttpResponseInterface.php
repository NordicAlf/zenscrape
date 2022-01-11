<?php
declare(strict_types=1);

namespace Zenscrape\Http\Response;

interface HttpResponseInterface
{
    public function getCode(): int;

    public function getMessage(): string;
}