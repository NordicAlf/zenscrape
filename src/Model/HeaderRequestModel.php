<?php
declare(strict_types=1);

namespace Zenscrape\Model;

class HeaderRequestModel
{
    protected string $contentType = 'application/json';
    protected string $apiKey;

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function setContentType(string $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }
}
