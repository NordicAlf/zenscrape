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

namespace Zenscrape;

use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Model\QueryRequestModel;

/**
 * Interface for Zenscrape Client
 *
 * @author NordicALF <nordic_alf@protonmail.com>
 */
interface ZensrapeClientInterface
{
    /**
     * Get HTML-page via Zenscrape.com and Guzzle
     *
     * @param string $method GET/POST
     * @param QueryRequestModel $query - equivalent of $_GET/$_POST
     * @param HeaderRequestModel $headers - HTTP headers
     * @return string html-page in string-view
     */
    public function getPage(string $method, QueryRequestModel $query, HeaderRequestModel $headers): string;
}