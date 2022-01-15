<?php
declare(strict_types=1);

namespace Zenscrape\Transformer;

use Zenscrape\Storage\MessageStorage;
use Zenscrape\Transformer\Request\HeaderRequestTransformer;
use Zenscrape\Transformer\Request\QueryRequestTransformer;
use Exception;

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