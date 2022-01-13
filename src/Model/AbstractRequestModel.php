<?php
declare(strict_types=1);

namespace Zenscrape\Model;

class AbstractRequestModel
{
    protected string $method = '';
    protected string $zenscrapeApiEndpoint = 'https://app.zenscrape.com/api/v1/get';

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getZenscrapeApiEndpoint(): string
    {
        return $this->zenscrapeApiEndpoint;
    }

    public function setZenscrapeApiEndpoint(string $url): self
    {
        $this->zenscrapeApiEndpoint = $url;

        return $this;
    }
}