<?php
declare(strict_types=1);

namespace Zenscrape\Http\Response;

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