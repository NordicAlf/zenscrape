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

namespace Zenscrape\Model;

/**
 * Class HeaderRequestModel - Headers for request
 */
class HeaderRequestModel implements RequestModelInterface
{
    /**
     * Your key from zenscrape.com
     *
     * @required
     * @var string|null $apikey
     */
    protected ?string $apikey = null;

    /**
     * Cookies for request
     *
     * @var string|null $cookies
     */
    protected ?string $cookies = null;

    /**
     * Here you can put any headers
     * Content-Type header is required
     * Put Content-Type in this array, for example:
     * $this->setCustomHeader('Content-Type', application/json)
     *
     * @var array $customHeaders
     */
    protected array $customHeaders = [];

    public function getApikey(): ?string
    {
        return $this->apikey;
    }

    public function setApikey(?string $apiKey): self
    {
        $this->apikey = $apiKey;

        return $this;
    }

    public function getCookies(): ?string
    {
        return $this->cookies;
    }

    public function setCookies(?string $cookies): self
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
