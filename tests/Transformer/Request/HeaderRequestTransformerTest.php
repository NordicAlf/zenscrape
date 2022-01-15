<?php
declare(strict_types=1);

namespace Zenscrape\Transformer\Request;

use PHPUnit\Framework\TestCase;
use Zenscrape\Model\HeaderRequestModel;

class HeaderRequestTransformerTest extends TestCase
{
    public function testGetArray()
    {
        $headersRequest = new HeaderRequestModel();
        $headersRequest
            ->setApikey($_ENV['api_key'])
            ->setCustomHeader('Content-Type', 'application/json');

        $headerRequestTransformer = new HeaderRequestTransformer();
        $data = $headerRequestTransformer->transform($headersRequest);

        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
    }
}