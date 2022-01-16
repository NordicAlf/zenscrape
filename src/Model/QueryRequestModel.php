<?php
declare(strict_types=1);

namespace Zenscrape\Model;

class QueryRequestModel implements RequestModelInterface
{
    protected ?string $url = null;
    protected ?string $location = null;
    protected ?bool $premium = null;
    protected ?bool $keepHeaders = null;
    protected ?string $deviceType = null;
    protected ?bool $render = null;
    protected ?int $waitFor = null;
    protected ?string $waitForCss = null;
    protected ?string $session = null;
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