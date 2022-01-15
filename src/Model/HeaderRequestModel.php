<?php
declare(strict_types=1);

namespace Zenscrape\Model;

class HeaderRequestModel implements RequestModelInterface
{
    protected string $apikey;
    protected string $cookies;
    protected array $customHeaders = [];

    public function getApikey(): string
    {
        return $this->apikey;
    }

    public function setApikey(string $apiKey): self
    {
        $this->apikey = $apiKey;

        return $this;
    }

    public function getCookies(): string
    {
        return $this->cookies;
    }

    public function setCookies(string $cookies): self
    {
        $this->cookies = $cookies;

        return $this;
    }

    public function getCustomHeaders(): array
    {
        return $this->customHeaders;
    }

    public function setCustomHeader(string $headerName, string $headerValue): self
    {
        $this->customHeaders[$headerName] = $headerValue;

        return $this;
    }
}
