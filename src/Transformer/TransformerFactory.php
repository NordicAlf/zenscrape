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

namespace Zenscrape\Transformer;

use Zenscrape\Storage\MessageStorage;
use Zenscrape\Transformer\Request\HeaderRequestTransformer;
use Zenscrape\Transformer\Request\QueryRequestTransformer;
use Exception;

/**
 * Class TransformerFactory - create your transformer object to array
 */
class TransformerFactory
{
    public function create(string $transformerName): object
    {
        switch ($transformerName) {
            case QueryRequestTransformer::class:
                return new QueryRequestTransformer();
            case HeaderRequestTransformer::class:
                return new HeaderRequestTransformer();
            default:
                throw new Exception(MessageStorage::TRANSFORM_NOT_FOUND);
        }
    }
}