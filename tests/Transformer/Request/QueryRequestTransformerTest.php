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
use Zenscrape\Model\QueryRequestModel;
use Zenscrape\Transformer\Request\QueryRequestTransformer;

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