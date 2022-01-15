<?php

namespace Zenscrape\Tests\Transformer;

use PHPUnit\Framework\TestCase;
use Zenscrape\Transformer\Request\HeaderRequestTransformer;
use Zenscrape\Transformer\Request\QueryRequestTransformer;
use Zenscrape\Transformer\TransformerFactory;

class TransformerFactoryTest extends TestCase
{
    public function testCheckFactory()
    {
        $transformFactory = new TransformerFactory();

        $this->assertInstanceOf(
            QueryRequestTransformer::class,
            $transformFactory->create(QueryRequestTransformer::class)
        );

        $this->assertInstanceOf(
            HeaderRequestTransformer::class,
            $transformFactory->create(HeaderRequestTransformer::class)
        );
    }
}