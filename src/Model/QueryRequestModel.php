<?php
declare(strict_types=1);

namespace Zenscrape\Model;

class QueryRequestModel extends AbstractRequestModel
{
    protected string $url = ''; // required
    protected string $location = '';
    protected bool $isPremiumLocation = false;
    protected bool $isKeepHeaders = false;
    protected bool $isDeviceMobileType = false;
    protected bool $isRender = false;
    protected int $waitFor = 0;
    protected string $waitForCss = '';
    protected string $session = '';
    protected bool $isScrollToBottom = false;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getIsPremiumLocation(): bool
    {
        return $this->isPremiumLocation;
    }

    public function setIsPremiumLocation(bool $isPremiumLocation): self
    {
        $this->isPremiumLocation = $isPremiumLocation;

        return $this;
    }

    public function getIsKeepHeaders(): bool
    {
        return $this->isKeepHeaders;
    }

    public function setIsKeepHeaders(bool $isKeepHeaders): self
    {
        $this->isKeepHeaders = $isKeepHeaders;

        return $this;
    }

    public function getIsDeviceMobileType(): bool
    {
        return $this->isDeviceMobileType;
    }

    public function setIsDeviceMobileType(bool $isDeviceMobileType): self
    {
        $this->isDeviceMobileType = $isDeviceMobileType;

        return $this;
    }

    public function getIsRender(): bool
    {
        return $this->isRender;
    }

    public function setIsRender(bool $isRender): self
    {
        $this->isRender = $isRender;

        return $this;
    }

    public function getWaitFor(): int
    {
        return $this->waitFor;
    }

    public function setWaitFor(int $seconds): self
    {
        $this->waitFor = $seconds;

        return $this;
    }

    public function getWaitForCss(): string
    {
        return $this->waitForCss;
    }

    public function setWaitForCss(string $className): self
    {
        $this->waitForCss = $className;

        return $this;
    }

    public function getSession(): string
    {
        return $this->session;
    }

    public function setSession(string $randomString): self
    {
        $this->session = $randomString;

        return $this;
    }

    public function getIsScrollToBottom(): bool
    {
        return $this->isScrollToBottom;
    }

    public function setIsScrollToBottom(bool $isScrollToBottom): self
    {
        $this->isScrollToBottom = $isScrollToBottom;

        return $this;
    }
}