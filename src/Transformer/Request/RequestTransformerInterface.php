<?php
declare(strict_types=1);

namespace Zenscrape\Transformer\Request;

use Zenscrape\Model\RequestModelInterface;

interface RequestTransformerInterface
{
    public function transform(RequestModelInterface $request): array;
}