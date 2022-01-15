<?php
declare(strict_types=1);

namespace Zenscrape;

use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;

interface ZensrapeClientInterface
{
    public function getPage(string $method, QueryRequestModel $query, HeaderRequestModel $headers): string;
}