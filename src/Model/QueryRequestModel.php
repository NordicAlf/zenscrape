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
 * Class QueryRequestModel - Query params for request
 */
class QueryRequestModel implements RequestModelInterface
{
    /**
     * Target site you want to scrape
     *
     * @required
     * @var string|null $url
     */
    protected ?string $url = null;

    /**
     * You can choose a location
     * See our list of countries - Zenscrape\Storage\LocationStorage
     * If premium=false possible locations are 'na' (North America) and 'eu' (Europe)
     * If premium=true you can choose an other locations
     *
     * @required
     * @var string|null $location
     */
    protected ?string $location = null;

    /**
     * Uses residential proxies, unlocks sites that are hard to scrape
     *
     * @var bool|null $premium
     */
    protected ?bool $premium = null;

    /**
     * Allows to pass through forward headers (e.g. user agents, cookies)
     *
     * @var bool|null $keepHeaders
     */
    protected ?bool $keepHeaders = null;


    /**
     * By default, a desktop user agent is set.
     * When set to 'mobile', it will be set to an iPhone or Android user agent
     *
     * @var string|null $deviceType
     */
    protected ?string $deviceType = null;

    /**
     * Use a headless browser to fetch content that relies on javascript
     *
     * @var bool|null $render
     */
    protected ?bool $render = null;

    /**
     * Amount of seconds that a browser waits for content to render before it scrapes the HTML markup
     * Max value: 15
     * Only works together with render=true
     *
     * @var int|null $waitFor
     */
    protected ?int $waitFor = null;

    /**
     * Waits until the css-selector becomes visible
     * Only works together with render=true
     *
     * @var string|null $waitForCss
     */
    protected ?string $waitForCss = null;

    /**
     * A random string if you want to reuse an IP, for example session=kdQ1VeQE
     *
     * @var string|null $session
     */
    protected ?string $session = null;

    /**
     * Scrolls to bottom of page before returning the page content
     * Only works together with render=true
     *
     * @var bool|null $scrollToBottom
     */
    protected ?bool $scrollToBottom = null;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPremium(): ?bool
    {
        return $this->premium;
    }

    public function setPremium(?bool $isPremiumLocation): self
    {
        $this->premium = $isPremiumLocation;

        return $this;
    }

    public function getKeepHeaders(): ?bool
    {
        return $this->keepHeaders;
    }

    public function setKeepHeaders(?bool $isKeepHeaders): self
    {
        $this->keepHeaders = $isKeepHeaders;

        return $this;
    }

    public function getDeviceType(): ?string
    {
        return $this->deviceType;
    }

    public function setDeviceType(?string $deviceType): self
    {
        $this->deviceType = $deviceType;

        return $this;
    }

    public function getRender(): ?bool
    {
        return $this->render;
    }

    public function setRender(?bool $isRender): self
    {
        $this->render = $isRender;

        return $this;
    }

    public function getWaitFor(): ?int
    {
        return $this->waitFor;
    }

    public function setWaitFor(?int $seconds): self
    {
        $this->waitFor = $seconds;

        return $this;
    }

    public function getWaitForCss(): ?string
    {
        return $this->waitForCss;
    }

    public function setWaitForCss(?string $className): self
    {
        $this->waitForCss = $className;

        return $this;
    }

    public function getSession(): ?string
    {
        return $this->session;
    }

    public function setSession(?string $randomString): self
    {
        $this->session = $randomString;

        return $this;
    }

    public function getScrollToBottom(): ?bool
    {
        return $this->scrollToBottom;
    }

    public function setScrollToBottom(?bool $scrollToBottom): self
    {
        $this->scrollToBottom = $scrollToBottom;

        return $this;
    }
}