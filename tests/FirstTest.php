<?php

namespace Zenscrape\Tests;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testIntTypesInArray()
    {
        foreach ([1, 5, 10] as $item) {
            $this->assertIsInt($item);
        }
    }
}