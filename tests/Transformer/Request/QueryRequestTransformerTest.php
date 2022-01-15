<?php
declare(strict_types=1);

namespace Zenscrape\Transformer\Request;

use PHPUnit\Framework\TestCase;
use Zenscrape\Model\QueryRequestModel;

class QueryRequestTransformerTest extends TestCase
{
    public function testGetArray()
    {
        $queryRequest = new QueryRequestModel();
        $queryRequest
            ->setLocation('USA')
            ->setUrl('https://google.com');

        $headerRequestTransformer = new QueryRequestTransformer();
        $data = $headerRequestTransformer->transform($queryRequest);

        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
    }
}