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

namespace Zenscrape\Tests\Transformer\Request;

use PHPUnit\Framework\TestCase;
use Zenscrape\Model\HeaderRequestModel;
use Zenscrape\Transformer\Request\HeaderRequestTransformer;

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