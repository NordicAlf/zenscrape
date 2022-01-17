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

namespace Zenscrape\Transformer\Request;

use Zenscrape\Model\RequestModelInterface;

/**
 * Interface RequestTransformerInterface
 */
interface RequestTransformerInterface
{
    /**
     * Transform request object model to array for guzzle
     * See https://docs.guzzlephp.org/en/v6/request-options.html
     *
     * @param RequestModelInterface $request
     * @return array
     */
    public function transform(RequestModelInterface $request): array;
}