<?php
declare(strict_types=1);

namespace Zenscrape\Validator;

use Zenscrape\Exception\ZenscrapeException;

interface ValidatorInterface
{
    public function check(): bool;
}